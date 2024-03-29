<div class="model">
    <div id="login-modal">
        <div class="login-form default-form">
            <div class="form-inner">
                <h3>Apply for this role</h3>
                <form class="default-form" action="/applications" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <input hidden type="text" name="job_id" id="job_id_input" value="">
                    </div>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" name="name" value="{{ old('name') }}" placeholder="your name" required>
                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" name="email" value="{{ old('email') }}" placeholder="email" required>
                        @error('email')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Phone</label>
                        <input  type="tel" name="phone" value="{{ old('phone') }}" placeholder="Phone" required>
                        @error('phone')
                        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label>Your CV</label>
                        <div class="field-outer">
                            <div class="input-group checkboxes square">
                                <input type="file" name="cv">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <button class="theme-btn btn-style-one" type="submit" name="apply">Apply</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
