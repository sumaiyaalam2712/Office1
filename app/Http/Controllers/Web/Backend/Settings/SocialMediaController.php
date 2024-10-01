<?php

namespace App\Http\Controllers\Web\Backend\Settings;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SocialMedia;
use Exception;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class SocialMediaController extends Controller
{
    public function index() {
        $social_link = SocialMedia::latest('id')->get();
        return view('backend.layout.settings.social_media', compact('social_link'));
    }

    public function update(Request $request) {
        $validator = Validator::make($request->all(), [
            'social_media.*'    => 'required|string',
            'profile_link.*'    => 'required|url',
            'social_media_id.*' => 'sometimes|nullable|integer',
        ]);

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }
        try {
            $idsToUpdate = collect($request->social_media_id)->filter()->all();

            foreach ($request->social_media as $index => $media) {
                $profileLink   = $request->profile_link[$index] ?? null;
                $socialMediaId = $request->social_media_id[$index] ?? null;

                if ($media && $profileLink) {
                    $socialMedia               = $socialMediaId ? SocialMedia::find($socialMediaId) : new SocialMedia();
                    $socialMedia->social_media = $media;
                    $socialMedia->profile_link = $profileLink;
                    $socialMedia->save();

                    if (($key = array_search($socialMediaId, $idsToUpdate)) !== false) {
                        unset($idsToUpdate[$key]);
                    }
                }
            }

            SocialMedia::whereIn('id', $idsToUpdate)->delete();

            return back()->with('t-success', 'Social media links updated successfully.');
        } catch (Exception) {
            return back()->with('t-error', 'Social media links failed update.');
        }
    }

    public function destroy($id) {
        try {
            SocialMedia::destroy($id);

            DB::commit();

            return response()->json([
                'success' => true,
                'message' => 'Social media link deleted successfully.',
            ]);
        } catch (Exception $e) {
            return response()->json([
                'success' => false,
                'message' => 'Failed to delete social media link.',
                'error'   => $e->getMessage(),
            ], 500);
        }
    }
}
