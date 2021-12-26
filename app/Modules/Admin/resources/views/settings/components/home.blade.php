<div class="card-body">
    <div class="form-group">
        <lable for="inputLogo">Logo</lable>
        <input 
            type="file" 
            name="logo" 
            id="inputLogo" 
            class="form-control"
        >
        @if($record && $record->logo)
        <img src="{{asset('storage/'. $record->logo)}}" width="100" alt="image not found">
        @endif
        @error('logo')
        <span id="inputLogo-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <lable for="inputHomeCover">Home Cover</lable>
        <input 
            type="file" 
            name="home_cover" 
            id="inputHomeCover" 
            class="form-control"
        >
        @if($record && $record->home_cover)
        <img src="{{asset('storage/'. $record->home_cover)}}" width="100" alt="image not found">
        @endif
        @error('home_cover')
        <span id="home_cover-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <lable for="inputTitle">Home Title</lable>
        <input 
            type="text" 
            name="home_title" 
            value ="{{old('home_title') ? old('home_title') : ($record ? $record->home_title : '')}}"
            id="inputTitle" 
            class="form-control"
        >
        @error('home_title')
        <span id="home_title-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <lable for="home_description_text">Home Description</lable>
        <textarea 
        name="home_description"
        
        id="home_description_text"
        class="form-control"
        >{{old('home_description')?old('home_description'):($record?$record->home_description:"")}}</textarea>
        @error('home_description')
        <span id="inputHome_description-error" class="error invalid-feedback" style="display:block">{{ $message }}</span>
        @enderror
    </div>
</div>