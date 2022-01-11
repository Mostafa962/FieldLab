<div class="card-body">
    <div class="form-group">
        <lable for="inputabout_cover">About Cover</lable>
        <input 
            type="file" 
            name="about_cover" 
            id="inputabout_cover" 
            class="form-control"
        >
        @if($record && $record->about_cover)
        <img src="{{asset('storage/'. $record->about_cover)}}" width="100" alt="image not found">
        @endif
        @error('about_cover')
        <span id="about_cover-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <lable for="Inputabout_header">About Header</lable>
        <textarea 
        name="about_header"
        
        id="Inputabout_header"
        class="form-control"
        >{{old('about_header')?old('about_header'):($record?$record->about_header:"")}}</textarea>
        @error('about_header')
        <span id="about_header-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <hr>
    <div class="form-group">
        <lable for="Inputabout_p1">First Description</lable>
        <textarea 
        name="about_p1"
        
        id="Inputabout_p1"
        class="form-control"
        >{{old('about_p1')?old('about_p1'):($record?$record->about_p1:"")}}</textarea>
        @error('about_p1')
        <span id="about_p1-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <lable for="about_img1">First Image</lable>
        <input 
            type="file" 
            name="about_img1" 
            id="about_img1" 
            class="form-control"
        >
        @if($record && $record->about_img1)
        <img src="{{asset('storage/'. $record->about_img1)}}" width="100" alt="image not found">
        @endif
        @error('about_img1')
        <span id="about_img1-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <hr>
    <div class="form-group">
        <lable for="Inputabout_p2">Second Description</lable>
        <textarea 
        name="about_p2"
        
        id="Inputabout_p2"
        class="form-control"
        >{{old('about_p2')?old('about_p2'):($record?$record->about_p2:"")}}</textarea>
        @error('about_p2')
        <span id="about_p2-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <lable for="about_img2">Second Image</lable>
        <input 
            type="file" 
            name="about_img2" 
            id="about_img2" 
            class="form-control"
        >
        @if($record && $record->about_img2)
        <img src="{{asset('storage/'. $record->about_img2)}}" width="100" alt="image not found">
        @endif
        @error('about_img2')
        <span id="about_img2-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <hr>
    <div class="form-group">
        <lable for="Inputabout_p3">Third Description</lable>
        <textarea 
        name="about_p3"
        
        id="Inputabout_p3"
        class="form-control"
        >{{old('about_p3')?old('about_p3'):($record?$record->about_p3:"")}}</textarea>
        @error('about_p3')
        <span id="about_p3-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <lable for="about_img3">Third Image</lable>
        <input 
            type="file" 
            name="about_img3" 
            id="about_img3" 
            class="form-control"
        >
        @if($record && $record->about_img3)
        <img src="{{asset('storage/'. $record->about_img3)}}" width="100" alt="image not found">
        @endif
        @error('about_img3')
        <span id="about_img3-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <lable for="Inputabout_p4">Forth Description</lable>
        <textarea 
        name="about_p4"
        
        id="Inputabout_p4"
        class="form-control"
        >{{old('about_p4')?old('about_p4'):($record?$record->about_p4:"")}}</textarea>
        @error('about_p4')
        <span id="about_p4-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <lable for="about_img4">Forth Image</lable>
        <input 
            type="file" 
            name="about_img4" 
            id="about_img4" 
            class="form-control"
        >
        @if($record && $record->about_img4)
        <img src="{{asset('storage/'. $record->about_img4)}}" width="100" alt="image not found">
        @endif
        @error('about_img4')
        <span id="about_img4-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
</div>