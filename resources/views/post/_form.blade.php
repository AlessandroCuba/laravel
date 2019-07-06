
@csrf

<div class="form-group">
    <label for="name">Post Title</label>
    <input class="form-control @error('title') is-invalid @enderror" type="text" name="title" placeholder="Title Post" value="{{ old('title', $post->title) }}">
    @error('title')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="name">Slug</label>
    <input class="form-control @error('slug') is-invalid @enderror" type="text" name="slug" placeholder="Slug" value="{{ old('slug', $post->slug) }}">
    @error('slug')
        <div class="invalid-feedback">{{ $message }}</div>
    @enderror
</div>

<div class="form-group">
    <label for="content">Content</label>
    <textarea class="form-control" name="content" id="content" rows="10" cols="30">
        {{ old('content', $post->content) }}
    </textarea>
    {!! $errors->first('content', '<div class="invalid-feedback">:message</div>') !!}
</div>

<button type="submit" class="btn btn-success">@lang($button)</button>