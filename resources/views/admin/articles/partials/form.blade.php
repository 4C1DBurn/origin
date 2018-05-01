<label for="">Status</label>
<select class="form-control" name="published">
        @if (isset($article->id))
                <option value="0" @if ($article->published == 0) selected="" @endif>Not Published</option>
                <option value="1" @if ($article->published == 1) selected="" @endif>Published</option>
        @else
                <option value="0">Not Published</option>
                <option value="1">Published</option>
        @endif
</select>

<label for="">Title</label>
<input type="text" class="form-control" name="title" placeholder="News Title" value="{{$article->title or ""}}" required>

<label for="">Slug (Unique)</label>
<input class="form-control" type="text" name="slug" placeholder="Automatic Generation" value="{{$article->slug or ""}}" readonly="">

<label for="">Parent Category</label>
<select class="form-control" name="categories[]" multiple="">
        @include('admin.articles.partials.categories', ['categories' => $categories])
</select>

<label for="">Short Description</label>
<textarea class="form-control" id="description_short" name="description_short">{{$article->description_short or ""}}</textarea>

<label for="">Description</label>
<textarea class="form-control" id="description" name="description">{{$article->description or ""}}</textarea>

<hr />

<label for="">Meta Title</label>
<input type="text" class="form-control" name="meta_title" placeholder="Meta Description" value="{{$article->meta_title or ""}}">


<label for="">Meta Description</label>
<input type="text" class="form-control" name="meta_description" placeholder="Meta Description" value="{{$article->meta_description or ""}}">

<label for="">Meta Keywords</label>
<input type="text" class="form-control" name="meta_keyword" placeholder="Meta Keywords with coma separator" value="{{$article->meta_keyword or ""}}">

<hr />

<input class="btn btn-primary" type="submit" value="Save">