<div class="row">
    <div class="col-lg-12">
        <div class="form-group">
            <strong>Title : </strong>
            {!! Form::text('bptitle', null, ['placeholder' => 'Title', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <strong>Author : </strong>
                {!! Form::text('bpauthor', null, ['placeholder' => 'Author', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-6">
        <div class="form-group">
            <strong>Category : </strong>
                {!! Form::text('bpcategory', null, ['placeholder' => 'Category', 'class' => 'form-control']) !!}
        </div>
    </div>
    <div class="col-lg-12">
        <div class="form-group">
            <strong>Content : </strong>
                {!! Form::textarea('bpcontent', null, ['placeholder' => 'Content', 'class' => 'form-control', 'style'=>'height:150px']) !!}
        </div>
    </div>
    <div class="col-xs-12">
        <a href="{{ route('posts.index') }}" class="btn btn-xs btn-success">Back</a>
        <button type="submit" class="btn btn-xs btn-primary" name="button">Submit</button>
    </div>
</div>