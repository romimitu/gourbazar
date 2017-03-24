<div class="form-body">
    <div class="form-group">
        <?php echo Form::label('name','Name',['class'=>'col-sm-2 control-label']); ?>

        <div class="col-md-10">
            <?php echo Form::text('name',isset($member->name) ? $member->name : null, ['class'=> 'form-control']); ?>

        </div>
    </div>
    <div class="form-group">
        <?php echo Form::label('position','Position',['class'=>'col-sm-2 control-label']); ?>

        <div class="col-md-10">
            <?php echo Form::text('position',isset($member->position) ? $member->position : null, ['class'=> 'form-control']); ?>

        </div>
    </div>
    <div class="form-group">
        <?php echo Form::label('description', 'Description', ['class'=>'col-sm-2 control-label']); ?>

        <div class="col-md-10">
            <?php echo Form::textarea('description',isset($member->description) ? $member->description : null,['class'=> 'form-control', 'id'=>'details']); ?>

        </div>
    </div>
    <div class="form-group">
        <?php echo Form::label('email','E-mail',['class'=>'col-sm-2 control-label']); ?>

        <div class="col-md-2">
            <?php echo Form::text('email',isset($member->email) ? $member->email : null, ['class'=> 'form-control']); ?>

        </div>
        <?php echo Form::label('facebook','Facebook',['class'=>'col-sm-2 control-label']); ?>

        <div class="col-md-2">
            <?php echo Form::text('facebook',isset($member->facebook) ? $member->facebook : null, ['class'=> 'form-control']); ?>

        </div>
        <?php echo Form::label('twitter','Twitter',['class'=>'col-sm-2 control-label']); ?>

        <div class="col-md-2">
            <?php echo Form::text('twitter',isset($member->twitter) ? $member->twitter : null, ['class'=> 'form-control']); ?>

        </div>
    </div>
    <div class="form-group last">
        <label class="control-label col-md-2">Image</label>
        <div class="col-md-10">
            <div class="fileinput fileinput-new" data-provides="fileinput">
                <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                <?php if(isset($member->image)): ?>
                    <img src="/<?php echo e($member->image); ?>" alt="" />
                <?php else: ?>
                    <img src="http://www.placehold.it/200x150/" alt="" /> 
                <?php endif; ?>
                </div>
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