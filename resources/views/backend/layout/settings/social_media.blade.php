
@extends('backend.app')
@section('content')
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
        {{-- <h4 class="py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Horizontal Layouts</h4> --}}

        <!-- Basic Layout & Basic with Icons -->
        <div class="row">
            <!-- Basic Layout -->
            <div class="col-xxl">
                <div class="card mb-4">
                    <div class="card-header d-flex align-items-center justify-content-between">
                        <h3 class="mb-0">Social Media Setting</h3>
                        {{-- <small class="text-muted float-end">Default label</small> --}}
                    </div>
                    <div class="card-body">
                        <form action="{{ route('social.update') }}" method="POST">
                            @csrf
                            <div style="display: flex;justify-content: end;margin-bottom: 10px;">
                                <button class="btn btn-outline-secondary" type="button" onclick="addSocialField()"
                                    style="font-weight: 900" title="Add a new social media field">Add</button>
                            </div>
                            <div id="social_media_container">
                                @foreach ($social_link as $index => $link)
                                    <div class="social_media input-group mb-3 dropdown">
                                        <input type="hidden" name="social_media_id[]" value="{{ $link->id }}">
                                        <select class="dropdown-toggle drop-custom" name="social_media[]"
                                            value="@isset($social_link){{ $link->social_media }}@endisset"
                                            title="Select a social media platform">
                                            <option class="dropdown-item">Select Social</option>
                                            <option class="dropdown-item" value="facebook"
                                                {{ $link->social_media == 'facebook' ? 'selected' : '' }}>Facebook
                                            </option>
                                            <option class="dropdown-item" value="instagram"
                                                {{ $link->social_media == 'instagram' ? 'selected' : '' }}>Instagram
                                            </option>
                                            <option class="dropdown-item" value="twitter"
                                                {{ $link->social_media == 'twitter' ? 'selected' : '' }}>Twitter
                                            </option>
                                            <option class="dropdown-item" value="tiktok"
                                                {{ $link->social_media == 'tiktok' ? 'selected' : '' }}>Tiktok
                                            </option>
                                            <option class="dropdown-item" value="youtube"
                                                {{ $link->social_media == 'youtube' ? 'selected' : '' }}>YouTube
                                            </option>

                                        </select>
                                        <input type="url" class="form-control" aria-label="Text input with dropdown button"
                                            name="profile_link[]"
                                            value="@isset($social_link){{ $link->profile_link }}@endisset"
                                            placeholder="Enter the profile link here">
                                        <button class="btn btn-outline-secondary removeSocialBtn" type="button"
                                            onclick="removeSocialField(this)" style="font-weight: 900"
                                            data-id="{{ $link->id }}"
                                            title="Remove this social media field">Remove</button>
                                    </div>
                                @endforeach
                            </div>

                            <div class="col-12">
                                <button type="submit" class="btn btn-primary" title="Submit the form">Submit</button>
                                <a href="{{ route('dashboard') }}" class="btn btn-danger me-2"
                                    title="Cancel and go back to the dashboard">Cancel</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / Content -->
@endsection

@push('script')
    <script>
        let socialFieldsCount = $('#social_media_container .social_media').length;

        function addSocialField() {
            const socialFieldsContainer = document.getElementById("social_media_container");

            if (socialFieldsCount < 5) {
                const newSocialField = document.createElement("div");
                newSocialField.className = "social_media input-group mb-3";
                newSocialField.innerHTML =
                    `
            <select class="dropdown-toggle drop-custom" name="social_media[]">
                <option class="dropdown-item">Select Social</option>
                <option class="dropdown-item" value="facebook">Facebook</option>
                <option class="dropdown-item" value="instagram">Instagram</option>
                <option class="dropdown-item" value="twitter">Twitter</option>
                <option class="dropdown-item" value="tiktok">Tiktok</option>
                <option class="dropdown-item" value="youtube">YouTube</option>
            </select>
            <input type="url" class="form-control" aria-label="Text input with dropdown button" name="profile_link[]">
            <button class="btn btn-outline-secondary" type="button" onclick="removeSocialField(this)" style="font-weight: 900">Remove</button>`;

                socialFieldsContainer.appendChild(newSocialField);
                socialFieldsCount++;
                document.querySelectorAll('select[name="social_media[]"]').forEach(selectElement => {
                    selectElement.removeEventListener('change',
                        checkForDuplicateSocialMedia);
                    selectElement.addEventListener('change', checkForDuplicateSocialMedia);
                });
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "You can only add five social links fields!",
                });
            }
        }


        function removeSocialField(button) {
            const socialField = button.parentElement;
            socialField.remove();
            socialFieldsCount--;
            checkForDuplicateSocialMedia();
        }

        function checkForDuplicateSocialMedia() {
            const allSelections = document.querySelectorAll('select[name="social_media[]"]');
            const allValues = Array.from(allSelections).map(select => select.value);
            const hasDuplicate = allValues.some((value, index) => allValues.indexOf(value) !== index && value !==
                "Select Social");

            if (hasDuplicate) {
                swal.fire("You cannot add the same social media platform more than once.");
                Swal.fire({
                    icon: "error",
                    title: "Oops...",
                    text: "You cannot add the same social media platform more than once.",
                });
                allSelections.forEach(selectElement => {
                    if (allValues.filter(value => value === selectElement.value).length > 1) {
                        selectElement.value = "Select Social";
                    }
                });
            }
        }

        window.removeSocialField = function(button) {
            const socialLinkId = $(button).data('id');

            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'DELETE',
                url: '{{ route('social.delete', '') }}/' + socialLinkId,
                data: {
                    _token: '{{ csrf_token() }}'
                },
                success: function(response) {
                    $(button).closest('.social_media').remove();
                    socialFieldsCount--;
                    if (response.success === true) {

                        toastr.success(response.message);
                    } else if (response.errors) {
                        toastr.error(response.errors[0]);
                    } else {
                        toastr.error(response.message);
                    }
                },
                error: function(xhr, status, error) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Something went wrong. Please try again.",
                    });
                }
            });
        };
    </script>
@endpush
