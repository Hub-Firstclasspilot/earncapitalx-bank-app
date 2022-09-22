<!-- styles -->
@push('styles')
<link href="https://unpkg.com/filepond@^4/dist/filepond.css" rel="stylesheet" />
@endpush
<!-- end styles -->

<!-- main section -->
 <div class="card" style="margin-top: 10px;">
    <div class="card-body">
        <div class="text-center">
            <form  class="text-center" method="POST" action="{{ route('user.avatar.store', $user->id) }}" enctype="multipart/form-data">
                @csrf
                <h5>Change account photo</h5>
                    <div class="col-sm-6 col-md-12">
                        <input type="file"
                        id="avatar"
                        class="filepond"
                        name="avatar"
                        accept="image/png, image/jpeg, image/gif"/>
                        <p style="font-size: 12px; color: #333;" > Accepted formats: gif, png, jpg. Max file size 2Mb</p>
                    </div>
                        <br>
                    <div class="mx-auto col-12">
                        <button type="submit" class="mb-1 btn btn--small btn--yellow" name="btnphoto">Upload</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- end main section -->

<!-- scripts -->
@push('scripts')
<script src="https://unpkg.com/filepond@^4/dist/filepond.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', () => {
        FilePond.create(
        document.querySelector('input[type="file"]')
        );

        FilePond.setOptions({
            server: {
                url: "{{ route('user.profile.avatar', $user->id) }}",
                headers: {
                    'X-CSRF-TOKEN': '{{ csrf_token() }}'
                }
            }
        })
    })
</script>
@endpush
<!-- end scripts -->

