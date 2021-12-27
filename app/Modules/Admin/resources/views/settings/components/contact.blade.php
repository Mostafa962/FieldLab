<div class="card-body">
    <div class="form-group">
        <lable for="inputAddress">Address</lable>
        <input 
            type="text" 
            name="address" 
            value ="{{old('address') ? old('address') : ($record ? $record->address : '')}}"
            id="inputAddress" 
            class="form-control"
        >
        @error('address')
        <span id="address-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <lable for="inputFax">Fax</lable>
        <input 
            type="text" 
            name="fax" 
            value ="{{old('fax') ? old('fax') : ($record ? $record->fax : '')}}"
            id="inputFax" 
            class="form-control"
        >
        @error('fax')
        <span id="fax-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <lable for="inputPhone">Phone</lable>
        <input 
            type="text" 
            name="phone" 
            value ="{{old('phone') ? old('phone') : ($record ? $record->phone : '')}}"
            id="inputPhone" 
            class="form-control"
        >
        @error('phone')
        <span id="phone-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <lable for="inputEmail">Email</lable>
        <input 
            type="email" 
            name="email" 
            value ="{{old('email') ? old('email') : ($record ? $record->email : '')}}"
            id="inputEmail" 
            class="form-control"
        >
        @error('email')
        <span id="email-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <lable for="inputFacebook">Facebook</lable>
        <input 
            type="url" 
            name="facebook" 
            value ="{{old('facebook') ? old('facebook') : ($record ? $record->facebook : '')}}"
            id="inputFacebook" 
            class="form-control"
        >
        @error('facebook')
        <span id="facebook-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <lable for="inputInstagram">Instagram</lable>
        <input 
            type="url" 
            name="instagram" 
            value ="{{old('instagram') ? old('instagram') : ($record ? $record->instagram : '')}}"
            id="inputInstagram" 
            class="form-control"
        >
        @error('instagram')
        <span id="instagram-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <lable for="inputTwitter">Twitter</lable>
        <input 
            type="url" 
            name="twitter" 
            value ="{{old('twitter') ? old('twitter') : ($record ? $record->twitter : '')}}"
            id="inputTwitter" 
            class="form-control"
        >
        @error('twitter')
        <span id="twitter-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <lable for="inputLinkedin">Linkedin</lable>
        <input 
            type="url" 
            name="linkedin" 
            value ="{{old('linkedin') ? old('linkedin') : ($record ? $record->linkedin : '')}}"
            id="inputLinkedin" 
            class="form-control"
        >
        @error('linkedin')
        <span id="linkedin-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <lable for="inputYoutube">Youtube</lable>
        <input 
            type="url" 
            name="youtube" 
            value ="{{old('youtube') ? old('youtube') : ($record ? $record->youtube : '')}}"
            id="inputYoutube" 
            class="form-control"
        >
        @error('youtube')
        <span id="youtube-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
</div>