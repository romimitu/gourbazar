<div class="form-body">
    <div class="form-group">
        <?php echo Form::label('title','Title',['class'=>'col-sm-2 control-label']); ?>

        <div class="col-md-10">
            <?php echo Form::text('title',isset($product->title) ? $product->title : null, ['class'=> 'form-control']); ?>

        </div>
    </div>
    <div class="form-group">
        <?php echo Form::label('description', 'Description', ['class'=>'col-sm-2 control-label']); ?>

        <div class="col-md-10">
            <?php echo Form::textarea('description',isset($product->description) ? $product->description : null,['class'=> 'form-control', 'id'=>'details']); ?>

        </div>
    </div>
    <div class="form-group last">
        <label class="control-label col-md-2">Image</label>
        <div class="col-md-10">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                <?php if(isset($product->image)): ?>
                    <img src="/<?php echo e($product->image); ?>" alt="" /> </div>
                <?php else: ?>
                    <img src="http://www.placehold.it/200x150/" alt="" /> </div>
                <?php endif; ?>
                <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"> </div>
                <div>
                    <span class="btn default btn-file">
                        <span class="fileinput-new"> Select image </span>
                        <span class="fileinput-exists"> Change </span>
                        <?php echo Form::file('image'); ?>  </span>
                    <a href="javascript:;" class="btn red fileinput-exists" data-dismiss="fileinput"> Remove </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="form-actions">
    <div class="row">
        <div class="col-md-offset-3 col-md-9">
            <?php echo Form::submit('Submit ', ['class'=> 'btn green']); ?>

        </div>
    </div>
</div>