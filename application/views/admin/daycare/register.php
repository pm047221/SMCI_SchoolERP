<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-user-plus"></i> <?php echo $this->lang->line('register_day_care'); ?>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">
                    <!-- <div class="pull-right box-tools impbtntitle">
                        <?php if ($this->rbac->hasPrivilege('import_student', 'can_view')) { ?>
                            <a href="<?php echo site_url('student/import') ?>">
                                <button class="btn btn-primary btn-sm"><i class="fa fa-upload"></i> <?php echo $this->lang->line('import_student'); ?></button>
                            </a>
                        <?php }
                        ?>
                    </div> -->
                    <form id="form1" action="<?php echo site_url('day_care/create') ?>"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        <?php //echo validation_errors();  ?>
                        <div class="">
                            <div class="bozero">
                                <h4 class="pagetitleh-whitebg"><?php echo $this->lang->line('register_day_care'); ?></h4>
                                <h4 class="pagetitleh2"><?php echo $this->lang->line('about_child'); ?></h4>
                                <div class="around10">
                                    <?php if ($this->session->flashdata('msg')) { ?>
                                        <?php echo $this->session->flashdata('msg') ?>
                                    <?php } ?>
                                    <?php if (isset($error_message)) { ?>
                                        <div class="alert alert-warning"><?php echo $error_message; ?></div>
                                    <?php } ?>
                                    <?php echo $this->customlib->getCSRF(); ?>
                                    
                                    <input type="hidden" name="sibling_name" value="<?php echo set_value('sibling_name'); ?>" id="sibling_name_next">
                                    <input type="hidden" name="sibling_id" value="<?php echo set_value('sibling_id', 0); ?>" id="sibling_id">
                                    
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('first_name'); ?></label><small class="req"> *</small>
                                                <input id="firstname" name="firstname" placeholder="" type="text" class="form-control"  value="<?php echo set_value('firstname'); ?>" />
                                                <span class="text-danger"><?php echo form_error('firstname'); ?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('last_name'); ?></label></label><small class="req"> *</small>
                                                <input id="lastname" name="lastname" placeholder="" type="text" class="form-control"  value="<?php echo set_value('lastname'); ?>" />
                                                <span class="text-danger"><?php echo form_error('lastname'); ?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('date_of_birth'); ?></label><small class="req"> *</small>
                                                <input id="dob" name="dob" placeholder="" type="text" class="form-control date"  value="<?php echo set_value('dob'); ?>" />
                                                <span class="text-danger"><?php echo form_error('dob'); ?></span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('child_age'); ?></label><small class="req"> *</small>
                                                <input id="child_age" name="child_age" placeholder="" type="text" class="form-control"  value="<?php echo set_value('child_age'); ?>" />
                                                <span class="text-danger"><?php echo form_error('child_age'); ?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('height'); ?></label></label><small class="req"> *</small>
                                                <input id="height" name="height" placeholder="" type="text" class="form-control"  value="<?php echo set_value('height'); ?>" />
                                                <span class="text-danger"><?php echo form_error('height'); ?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('childs_weight'); ?></label><small class="req"> *</small>
                                                <input id="childs_weight" name="childs_weight" placeholder="" type="text" class="form-control date"  value="<?php echo set_value('childs_weight'); ?>" />
                                                <span class="text-danger"><?php echo form_error('childs_weight'); ?></span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('email'); ?></label>
                                                <input id="email" name="email" placeholder="" type="text" class="form-control"  value="<?php echo set_value('email'); ?>" />
                                                <span class="text-danger"><?php echo form_error('email'); ?></span>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <label for="present_addr"><?php echo $this->lang->line('present_addr'); ?></label>
                                            <textarea id="present_addr" name="present_addr" placeholder="" class="form-control" rows="2"><?php echo set_value('present_addr'); ?></textarea>
                                            <span class="text-danger"><?php echo form_error('present_addr'); ?></span>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('home_phn'); ?></label>
                                                <input id="homephn" name="homephn" placeholder="" type="text" class="form-control"  value="<?php echo set_value('homephn'); ?>" />
                                                <span class="text-danger"><?php echo form_error('homephn'); ?></span>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <label for="exampleInputEmail1"><?php echo $this->lang->line('perm_addr'); ?></label>
                                            <textarea id="perm_addr" name="perm_addr" placeholder="" class="form-control" rows="2"><?php echo set_value('perm_addr'); ?></textarea>
                                            <span class="text-danger"><?php echo form_error('perm_addr'); ?></span>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('gender'); ?></label>
                                                <input id="gender" name="gender" placeholder="" type="text" class="form-control"  value="<?php echo set_value('gender'); ?>" />
                                                <span class="text-danger"><?php echo form_error('gender'); ?></span>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <label for="exampleInputEmail1"><?php echo $this->lang->line('family_doctor_info'); ?></label>
                                            <textarea id="family_doctor" name="family_doctor" placeholder="" class="form-control" rows="2"><?php echo set_value('family_doctor'); ?></textarea>
                                            <span class="text-danger"><?php echo form_error('family_doctor'); ?></span>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('child_rest'); ?></label>
                                                <label><input class="radio-inline" type="radio" name="f_yes" value="Yes"><?php echo $this->lang->line('yes'); ?></label>
                                                <label><input class="radio-inline" type="radio" name="f_yes" value="No"><?php echo $this->lang->line('no'); ?></label>
                                                <span class="text-danger"><?php echo form_error('child_rest'); ?></span>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">

                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('child_info'); ?></label>
                                                <input id="child_info" name="child_info" placeholder="" type="text" class="form-control"  value="<?php echo set_value('child_info'); ?>" />
                                                <span class="text-danger"><?php echo form_error('child_info'); ?></span>
                                            </div>
                                        </div>                                     

                                    </div>

                                    <div class="row">  
                                        <div class="col-md-12"><h4 class="pagetitleh2"><?php echo $this->lang->line('parent_guardian_detail'); ?></h4></div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('father_name'); ?></label>
                                                <input id="father_name" name="father_name" placeholder="" type="text" class="form-control"  value="<?php echo set_value('father_name'); ?>" />
                                                <span class="text-danger"><?php echo form_error('father_name'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('father_phone'); ?></label>
                                                <input id="father_phone" name="father_phone" placeholder="" type="text" class="form-control"  value="<?php echo set_value('father_phone'); ?>" />
                                                <span class="text-danger"><?php echo form_error('father_phone'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('father_occupation'); ?></label>
                                                <input id="father_occupation" name="father_occupation" placeholder="" type="text" class="form-control"  value="<?php echo set_value('father_occupation'); ?>" />
                                                <span class="text-danger"><?php echo form_error('father_occupation'); ?></span>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('mother_name'); ?></label>
                                                <input id="mother_name" name="mother_name" placeholder="" type="text" class="form-control"  value="<?php echo set_value('mother_name'); ?>" />
                                                <span class="text-danger"><?php echo form_error('mother_name'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('mother_phone'); ?></label>
                                                <input id="mother_phone" name="mother_phone" placeholder="" type="text" class="form-control"  value="<?php echo set_value('mother_phone'); ?>" />
                                                <span class="text-danger"><?php echo form_error('mother_phone'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('mother_occupation'); ?></label>
                                                <input id="mother_occupation" name="mother_occupation" placeholder="" type="text" class="form-control"  value="<?php echo set_value('mother_occupation'); ?>" />
                                                <span class="text-danger"><?php echo form_error('mother_occupation'); ?></span>
                                            </div>
                                        </div>
                                    </div><!--./row-->        

                                    <div class="row">
                                        <div class="form-group col-md-12">
                                            <label><?php echo $this->lang->line('if_guardian_is'); ?><small class="req"> *</small>&nbsp;&nbsp;&nbsp;</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="guardian_is" <?php
                                                echo set_value('guardian_is') == "father" ? "checked" : "";
                                                ?>   value="father"> <?php echo $this->lang->line('father'); ?>
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="guardian_is" <?php
                                                echo set_value('guardian_is') == "mother" ? "checked" : "";
                                                ?>   value="mother"> <?php echo $this->lang->line('mother'); ?>
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="guardian_is" <?php
                                                echo set_value('guardian_is') == "other" ? "checked" : "";
                                                ?>   value="other"> <?php echo $this->lang->line('other'); ?>
                                            </label>
                                            <span class="text-danger"><?php echo form_error('guardian_is'); ?></span>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"> <?php echo $this->lang->line('upload') . " " . $this->lang->line('documents'); ?></label>
                                                <input id="document" name="document"  type="file" class="form-control"  value="<?php echo set_value('document'); ?>" />
                                                <span class="text-danger"><?php echo form_error('document'); ?></span>
                                            </div>
                                        </div>




                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('guardian_name'); ?></label><small class="req"> *</small>
                                                <input id="guardian_name" name="guardian_name" placeholder="" type="text" class="form-control"  value="<?php echo set_value('guardian_name'); ?>" />
                                                <span class="text-danger"><?php echo form_error('guardian_name'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('guardian_relation'); ?></label>
                                                <input id="guardian_relation" name="guardian_relation" placeholder="" type="text" class="form-control"  value="<?php echo set_value('guardian_relation'); ?>" />
                                                <span class="text-danger"><?php echo form_error('guardian_relation'); ?></span>
                                            </div>
                                        </div>
                                    </div><!--./row-->    
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('guardian_phone'); ?></label><small class="req"> *</small>
                                                <input id="guardian_phone" name="guardian_phone" placeholder="" type="text" class="form-control"  value="<?php echo set_value('guardian_phone'); ?>" />
                                                <span class="text-danger"><?php echo form_error('guardian_phone'); ?></span>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('guardian_occupation'); ?></label>
                                                <input id="guardian_occupation" name="guardian_occupation" placeholder="" type="text" class="form-control"  value="<?php echo set_value('guardian_occupation'); ?>" />
                                                <span class="text-danger"><?php echo form_error('guardian_occupation'); ?></span>
                                            </div>
                                        </div>


                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('guardian_email'); ?></label>
                                                <input id="guardian_email" name="guardian_email" placeholder="" type="text" class="form-control"  value="<?php echo set_value('guardian_email'); ?>" />
                                                <span class="text-danger"><?php echo form_error('guardian_email'); ?></span>
                                            </div>

                                        </div>

                                        <div class="col-md-12">
                                            <div class="form-group">   
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('guardian_address'); ?></label>
                                                <textarea id="guardian_address" name="guardian_address" placeholder="" class="form-control" rows="2"><?php echo set_value('guardian_address'); ?></textarea>
                                                <span class="text-danger"><?php echo form_error('guardian_address'); ?></span>
                                            </div>  
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="table-wrapper">
                                            <div class="table-title">
                                                <div class="row">
                                                    <div class="col-sm-8"><h5><u><?php echo $this->lang->line('emer_cont'); ?></u></h5></div>
                                                    <div class="col-sm-4">
                                                        <button type="button" class="btn btn-secondary add-new"><i class="fa fa-plus"></i> Add New</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th><?php echo $this->lang->line('nm'); ?></th>
                                                        <th><?php echo $this->lang->line('rel_to_child'); ?></th>
                                                        <th><?php echo $this->lang->line('home_phn'); ?></th>
                                                        <th><?php echo $this->lang->line('work_phn'); ?></th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td>
                                                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    
                                    <div class="form-group col-md-12">
                                        <label><?php echo $this->lang->line('cus_rest'); ?><small class="req"> *</small>&nbsp;&nbsp;&nbsp;</label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cus_rest" value="yes"> <?php echo $this->lang->line('d_yes'); ?>
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="cus_rest" value="no"><?php echo $this->lang->line('d_no'); ?>
                                        </label>
                                        <span class="text-danger"><?php echo form_error('cus_rest'); ?></span>
                                    </div>

                                    <div class="row">
                                        <div class="table-wrapper">
                                            <div class="table-title">
                                                <div class="row">
                                                    <div class="col-sm-8"><h5><u><?php echo $this->lang->line('no_perm'); ?></u></h5></div>
                                                    <div class="col-sm-4">
                                                        <button type="button" class="btn btn-secondary add-new"><i class="fa fa-plus"></i> Add New</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-bordered">
                                                <thead>
                                                    <tr>
                                                        <th><?php echo $this->lang->line('nm'); ?></th>
                                                        <th><?php echo $this->lang->line('rel_to_child'); ?></th>
                                                        <th><?php echo $this->lang->line('contact_number'); ?></th>
                                                        <th>Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td>
                                                            <a class="add" title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                            <a class="edit" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                            <a class="delete" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="row">  
                                        <div class="col-md-12"><h4 class="pagetitleh2"><?php echo $this->lang->line('childs_health'); ?></h4></div>
                                        <br>
                                        <div class="form-group col-md-12">
                                            <label><?php echo $this->lang->line('allergies'); ?><small class="req"> *</small>&nbsp;&nbsp;&nbsp;</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cus_rest" value="yes"> <?php echo $this->lang->line('d_yes'); ?>
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cus_rest" value="no"><?php echo $this->lang->line('d_no'); ?>
                                            </label>
                                            <span class="text-danger"><?php echo form_error('cus_rest'); ?></span>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <label for="exampleInputEmail1"><?php echo $this->lang->line('yes_exp'); ?></label>
                                            <textarea id="yes_exp" name="yes_exp" placeholder="" class="form-control" rows="2"><?php echo set_value('yes_exp'); ?></textarea>
                                            <span class="text-danger"><?php echo form_error('yes_exp'); ?></span>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label><?php echo $this->lang->line('spcl_medi'); ?><small class="req"> *</small>&nbsp;&nbsp;&nbsp;</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cus_rest" value="yes"> <?php echo $this->lang->line('d_yes'); ?>
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cus_rest" value="no"><?php echo $this->lang->line('d_no'); ?>
                                            </label>
                                            <span class="text-danger"><?php echo form_error('cus_rest'); ?></span>
                                        </div>
                                        
                                        <div class="col-md-12">
                                            <label for="exampleInputEmail1"><?php echo $this->lang->line('yes_exp'); ?></label>
                                            <textarea id="yes_exp" name="yes_exp" placeholder="" class="form-control" rows="2"><?php echo set_value('yes_exp'); ?></textarea>
                                            <span class="text-danger"><?php echo form_error('yes_exp'); ?></span>
                                        </div>

                                        <div class="col-md-12">
                                            <label for="exampleInputEmail1"><b><?php echo $this->lang->line('rec_immu'); ?></b></label>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label><?php echo $this->lang->line('child_immu'); ?><small class="req"> *</small>&nbsp;&nbsp;&nbsp;</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cus_rest" value="yes"> <?php echo $this->lang->line('d_yes'); ?>
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cus_rest" value="no"><?php echo $this->lang->line('d_no'); ?>
                                            </label>
                                            <span class="text-danger"><?php echo form_error('cus_rest'); ?></span>
                                        </div>
                                        
                                    </div><!--./row-->     

                                    <div class="row">  
                                        <div class="col-md-12"><h4 class="pagetitleh2"><?php echo $this->lang->line('perm_form'); ?></h4></div>
                                        <br>
                                        <div class="form-group col-md-12">
                                            <label><?php echo $this->lang->line('perm_trips'); ?><small class="req"> *</small>&nbsp;&nbsp;&nbsp;</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cus_rest" value="yes"> <?php echo $this->lang->line('d_yes'); ?>
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cus_rest" value="no"><?php echo $this->lang->line('d_no'); ?>
                                            </label>
                                            <span class="text-danger"><?php echo form_error('cus_rest'); ?></span>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label><?php echo $this->lang->line('perm_pics_vid'); ?><small class="req"> *</small>&nbsp;&nbsp;&nbsp;</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cus_rest" value="yes"> <?php echo $this->lang->line('d_yes'); ?>
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cus_rest" value="no"><?php echo $this->lang->line('d_no'); ?>
                                            </label>
                                            <span class="text-danger"><?php echo form_error('cus_rest'); ?></span>
                                        </div>

                                        <div class="form-group col-md-12">
                                            <label><?php echo $this->lang->line('emerg_cont_per'); ?><small class="req"> *</small>&nbsp;&nbsp;&nbsp;</label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cus_rest" value="yes"> <?php echo $this->lang->line('d_yes'); ?>
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="cus_rest" value="no"><?php echo $this->lang->line('d_no'); ?>
                                            </label>
                                            <span class="text-danger"><?php echo form_error('cus_rest'); ?></span>
                                        </div>

                                    </div><!--./row-->        

                                </div>
                            </div>
                        </div>
                                    
                        <div class="box-footer">
                            <button type="submit" class="btn btn-info pull-right"><?php echo $this->lang->line('submit'); ?></button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
</div>
</section>
</div>



<div class="modal fade" id="mySiblingModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title title modal_title"></h4>
            </div>
            <div class="modal-body">
                <div class="form-horizontal">
                    <div class="box-body">
                        <div class="sibling_msg">

                        </div>
                        <input  type="hidden" class="form-control" id="transport_student_session_id"  value="0" readonly="readonly"/>
                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-2 control-label"><?php echo $this->lang->line('class'); ?></label>
                            <div class="col-sm-10">
                                <select  id="sibiling_class_id" name="sibiling_class_id" class="form-control"  >
                                    <option value=""><?php echo $this->lang->line('select'); ?></option>
                                    <?php
                                    foreach ($classlist as $class) {
                                        ?>
                                        <option value="<?php echo $class['id'] ?>"<?php
                                        if (set_value('sibiling_class_id') == $class['id']) {
                                            echo "selected=selected";
                                        }
                                        ?>><?php echo $class['class'] ?></option>
                                                <?php
                                                $count++;
                                            }
                                            ?>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label"><?php echo $this->lang->line('section'); ?></label>
                            <div class="col-sm-10">
                                <select  id="sibiling_section_id" name="sibiling_section_id" class="form-control">
                                    <option value=""><?php echo $this->lang->line('select'); ?></option>
                                </select>
                                <span class="text-danger" id="transport_amount_error"></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-2 control-label"><?php echo $this->lang->line('student'); ?>
                            </label>

                            <div class="col-sm-10">
                                <select  id="sibiling_student_id" name="sibiling_student_id" class="form-control" >
                                    <option value=""   ><?php echo $this->lang->line('select'); ?></option>
                                </select>
                                <span class="text-danger" id="transport_amount_fine_error"></span>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer">

                <button type="button" class="btn btn-primary add_sibling" id="load" data-loading-text="<i class='fa fa-circle-o-notch fa-spin'></i> Processing"><i class="fa fa-user"></i> <?php echo $this->lang->line('add'); ?></button>
            </div>
        </div>
    </div>
</div>



<script type="text/javascript">


    $(document).ready(function () {
        var date_format = '<?php echo $result = strtr($this->customlib->getSchoolDateFormat(), ['d' => 'dd', 'm' => 'mm', 'Y' => 'yyyy']) ?>';
        var class_id = $('#class_id').val();
        var section_id = '<?php echo set_value('section_id', 0) ?>';
        var hostel_id = $('#hostel_id').val();
        var hostel_room_id = '<?php echo set_value('hostel_room_id', 0) ?>';
        getHostel(hostel_id, hostel_room_id);
        getSectionByClass(class_id, section_id);

        $(document).on('change', '#class_id', function (e) {
            $('#section_id').html("");
            var class_id = $(this).val();
            getSectionByClass(class_id, 0);
        });



        $('.datetime').datetimepicker({

        });
        $(".color").colorpicker();

        $("#btnreset").click(function () {
            $("#form1")[0].reset();
        });


        $(document).on('change', '#hostel_id', function (e) {
            var hostel_id = $(this).val();
            getHostel(hostel_id, 0);

        });

        function getSectionByClass(class_id, section_id) {

            if (class_id != "") {
                $('#section_id').html("");
                var base_url = '<?php echo base_url() ?>';
                var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';
                var url = "<?php
                                            $userdata = $this->customlib->getUserData();
                                            if (($userdata["role_id"] == 2)) {
                                                echo "getClassTeacherSection";
                                            } else {
                                                echo "getByClass";
                                            }
                                            ?>";

                $.ajax({
                    type: "GET",
                    url: base_url + "sections/getByClass",
                    data: {'class_id': class_id},
                    dataType: "json",
                    beforeSend: function () {
                        $('#section_id').addClass('dropdownloading');
                    },
                    success: function (data) {
                        $.each(data, function (i, obj)
                        {
                            var sel = "";
                            if (section_id == obj.section_id) {
                                sel = "selected";
                            }
                            div_data += "<option value=" + obj.section_id + " " + sel + ">" + obj.section + "</option>";
                        });
                        $('#section_id').append(div_data);
                    },
                    complete: function () {
                        $('#section_id').removeClass('dropdownloading');
                    }
                });
            }
        }


        function getHostel(hostel_id, hostel_room_id) {
            if (hostel_room_id == "") {
                hostel_room_id = 0;
            }

            if (hostel_id != "") {

                $('#hostel_room_id').html("");


                var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';
                $.ajax({
                    type: "GET",
                    url: baseurl + "admin/hostelroom/getRoom",
                    data: {'hostel_id': hostel_id},
                    dataType: "json",
                    beforeSend: function () {
                        $('#hostel_room_id').addClass('dropdownloading');
                    },
                    success: function (data) {
                        $.each(data, function (i, obj)
                        {
                            var sel = "";
                            if (hostel_room_id == obj.id) {
                                sel = "selected";
                            }

                            div_data += "<option value=" + obj.id + " " + sel + ">" + obj.room_no + " (" + obj.room_type + ")" + "</option>";

                        });
                        $('#hostel_room_id').append(div_data);
                    },
                    complete: function () {
                        $('#hostel_room_id').removeClass('dropdownloading');
                    }
                });
            }
        }

        $('[data-toggle="tooltip"]').tooltip();
        var actions = $("table td:last-child").html();
        // Append table with add row form on add new button click
        $(".add-new").click(function(){
            $(this).attr("disabled", "disabled");
            var index = $("table tbody tr:last-child").index();
            var row = '<tr>' +
                '<td><input type="text" class="form-control" name="exam_details" id="exam_details"></td>' +
                '<td><input type="text" class="form-control" name="subj_details" id="subj_details"></td>' +
                '<td><input type="text" class="form-control" name="board" id="board"></td>' +
                '<td><input type="text" class="form-control" name="year_passing" id="year_passing"></td>' +
                '<td>' + actions + '</td>' +
            '</tr>';
            $("table").append(row);		
            $("table tbody tr").eq(index + 1).find(".add, .edit").toggle();
            $('[data-toggle="tooltip"]').tooltip();
        });
        // Add row on add button click
        $(document).on("click", ".add", function(){
            var empty = false;
            var input = $(this).parents("tr").find('input[type="text"]');
            input.each(function(){
                if(!$(this).val()){
                    $(this).addClass("error");
                    empty = true;
                } else{
                    $(this).removeClass("error");
                }
            });
            $(this).parents("tr").find(".error").first().focus();
            if(!empty){
                input.each(function(){
                    $(this).parent("td").html($(this).val());
                });			
                $(this).parents("tr").find(".add, .edit").toggle();
                $(".add-new").removeAttr("disabled");
            }		
        });
        // Edit row on edit button click
        $(document).on("click", ".edit", function(){		
            $(this).parents("tr").find("td:not(:last-child)").each(function(){
                $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            });		
            $(this).parents("tr").find(".add, .edit").toggle();
            $(".add-new").attr("disabled", "disabled");
        });
        // Delete row on delete button click
        $(document).on("click", ".delete", function(){
            $(this).parents("tr").remove();
            $(".add-new").removeAttr("disabled");
        });

    });

    function auto_fill_guardian_address() {
        if ($("#autofill_current_address").is(':checked'))
        {
            $('#current_address').val($('#guardian_address').val());
        }
    }
    function auto_fill_address() {
        if ($("#autofill_address").is(':checked'))
        {
            $('#permanent_address').val($('#current_address').val());
        }
    }
    $('input:radio[name="guardian_is"]').change(
            function () {
                if ($(this).is(':checked')) {
                    var value = $(this).val();
                    if (value == "father") {
                        $('#guardian_name').val($('#father_name').val());
                        $('#guardian_phone').val($('#father_phone').val());
                        $('#guardian_occupation').val($('#father_occupation').val());
                        $('#guardian_relation').val("Father")
                    } else if (value == "mother") {
                        $('#guardian_name').val($('#mother_name').val());
                        $('#guardian_phone').val($('#mother_phone').val());
                        $('#guardian_occupation').val($('#mother_occupation').val());
                        $('#guardian_relation').val("Mother")
                    } else {
                        $('#guardian_name').val("");
                        $('#guardian_phone').val("");
                        $('#guardian_occupation').val("");
                        $('#guardian_relation').val("")
                    }
                }
            });


</script>

<script type="text/javascript">
    $(".mysiblings").click(function () {
        $('.sibling_msg').html("");
        $('.modal_title').html('<b>' + "<?php echo $this->lang->line('sibling'); ?>" + '</b>');
        $('#mySiblingModal').modal({
            backdrop: 'static',
            keyboard: false,
            show: true
        });
    });
</script>

<script type="text/javascript">

    $(document).on('change', '#sibiling_class_id', function (e) {
        $('#sibiling_section_id').html("");
        var class_id = $(this).val();
        var base_url = '<?php echo base_url() ?>';
        var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';
        $.ajax({
            type: "GET",
            url: base_url + "sections/getByClass",
            data: {'class_id': class_id},
            dataType: "json",
            success: function (data) {
                $.each(data, function (i, obj)
                {
                    div_data += "<option value=" + obj.section_id + ">" + obj.section + "</option>";
                });
                $('#sibiling_section_id').append(div_data);
            }
        });
    });

    $(document).on('change', '#sibiling_section_id', function (e) {
        getStudentsByClassAndSection();
    });

    function getStudentsByClassAndSection() {

        $('#sibiling_student_id').html("");
        var class_id = $('#sibiling_class_id').val();
        var section_id = $('#sibiling_section_id').val();
        var student_id = '<?php echo set_value('student_id') ?>';
        var base_url = '<?php echo base_url() ?>';
        var div_data = '<option value=""><?php echo $this->lang->line('select'); ?></option>';
        $.ajax({
            type: "GET",
            url: base_url + "student/getByClassAndSection",
            data: {'class_id': class_id, 'section_id': section_id},
            dataType: "json",
            success: function (data) {
                $.each(data, function (i, obj)
                {
                    var sel = "";
                    if (section_id == obj.section_id) {
                        sel = "selected=selected";
                    }


                    if (obj.roll_no == null) {

                        div_data += "<option value=" + obj.id + ">" + obj.firstname + " " + obj.lastname + "</option>";


                    } else {
                        div_data += "<option value=" + obj.id + ">" + obj.firstname + " " + obj.lastname + " (" + obj.roll_no + ") " + "</option>";
                    }

                });
                $('#sibiling_student_id').append(div_data);
            }
        });
    }

    $(document).on('click', '.add_sibling', function () {
        var student_id = $('#sibiling_student_id').val();
        var base_url = '<?php echo base_url() ?>';
        if (student_id.length > 0) {
            $.ajax({
                type: "GET",
                url: base_url + "student/getStudentRecordByID",
                data: {'student_id': student_id},
                dataType: "json",
                success: function (data) {
                    $('#sibling_name').text("Sibling: " + data.firstname + " " + data.lastname);
                    $('#sibling_name_next').val(data.firstname + " " + data.lastname);
                    $('#sibling_id').val(student_id);
                    $('#father_name').val(data.father_name);
                    $('#father_phone').val(data.father_phone);
                    $('#father_occupation').val(data.father_occupation);
                    $('#mother_name').val(data.mother_name);
                    $('#mother_phone').val(data.mother_phone);
                    $('#mother_occupation').val(data.mother_occupation);
                    $('#guardian_name').val(data.guardian_name);
                    $('#guardian_relation').val(data.guardian_relation);
                    $('#guardian_address').val(data.guardian_address);
                    $('#guardian_phone').val(data.guardian_phone);
                    $('#state').val(data.state);
                    $('#city').val(data.city);
                    $('#pincode').val(data.pincode);
                    $('#current_address').val(data.current_address);
                    $('#permanent_address').val(data.permanent_address);
                    $('#guardian_occupation').val(data.guardian_occupation);
                    $("input[name=guardian_is][value='" + data.guardian_is + "']").prop("checked", true);
                    $('#mySiblingModal').modal('hide');
                }
            });
        } else {
            $('.sibling_msg').html("<div class='alert alert-danger'>No Student Selected</div>");
        }        
    });
</script>
<script type="text/javascript" src="<?php echo base_url(); ?>backend/dist/js/savemode.js"></script>
<style>
    
	.table-wrapper {
		margin: auto;
        background: #fff;	
        box-shadow: 0 1px 1px rgba(0,0,0,.05);
    }
    .table-title {
        padding-bottom: 10px;
        margin: 0 0 10px;
    }
    .table-title h2 {
        margin: 6px 0 0;
        font-size: 22px;
    }
    .table-title .add-new {
        float: right;
		height: 30px;
		font-weight: bold;
		font-size: 12px;
		text-shadow: none;
		min-width: 100px;
		border-radius: 50px;
		line-height: 13px;
    }
	.table-title .add-new i {
		margin-right: 4px;
	}
    table.table {
        table-layout: fixed;
    }
    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    table.table th:last-child {
        width: 100px;
    }
    table.table td a {
		cursor: pointer;
        display: inline-block;
        margin: 0 5px;
		min-width: 24px;
    }    
	table.table td a.add {
        color: #27C46B;
    }
    table.table td a.edit {
        color: #FFC107;
    }
    table.table td a.delete {
        color: #E34724;
    }
    table.table td i {
        font-size: 19px;
    }
	table.table td a.add i {
        font-size: 24px;
    	margin-right: -1px;
        position: relative;
        top: 3px;
    }    
    table.table .form-control {
        height: 32px;
        line-height: 32px;
        box-shadow: none;
        border-radius: 2px;
    }
	table.table .form-control.error {
		border-color: #f50000;
	}
	table.table td .add {
		display: none;
	}
</style>