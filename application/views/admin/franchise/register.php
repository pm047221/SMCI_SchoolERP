<div class="content-wrapper">
    <section class="content-header">
        <h1>
            <i class="fa fa-user-plus"></i> <?php echo $this->lang->line('register_franchise'); ?>
        </h1>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-primary">

                    <form id="form1" action="<?php echo site_url('admin/franchise/store') ?>"  id="employeeform" name="employeeform" method="post" accept-charset="utf-8" enctype="multipart/form-data">
                        <?php echo validation_errors();  ?>
                        <div class="">
                            <div class="bozero">
                                <h4 class="pagetitleh-whitebg"><?php echo $this->lang->line('register_franchise'); ?></h4>
                                <h4 class="pagetitleh2"><?php echo $this->lang->line('f_personal'); ?></h4>
                                <div class="around10">
                                    <?php if ($this->session->flashdata('msg')) { ?>
                                        <?php echo $this->session->flashdata('msg') ?>
                                    <?php } ?>
                                    <?php if (isset($error_message)) { ?>
                                        <div class="alert alert-warning"><?php echo $error_message; ?></div>
                                    <?php } ?>
                                    <?php echo $this->customlib->getCSRF(); ?>
                                    
                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('franchise_id'); ?></label><small class="req"> *</small>
                                                <input id="franchiseId" name="franchiseId" placeholder="Assign an unique Id" type="text" class="form-control"  value="<?php echo set_value('franchiseId'); ?>" />
                                                <span class="text-danger"><?php echo form_error('franchiseId'); ?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('franchise_loc'); ?></label></label><small class="req"> *</small>
                                                <input id="franchiseLoc" name="franchiseLoc" placeholder="Name of the city" type="text" class="form-control"  value="<?php echo set_value('franchiseLoc'); ?>" />
                                                <span class="text-danger"><?php echo form_error('franchiseLoc'); ?></span>
                                            </div>
                                        </div>
                                        
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('franchise_name'); ?></label><small class="req"> *</small>
                                                <input id="franchiseName" name="franchiseName" placeholder="Name of the Franchise" type="text" class="form-control"  value="<?php echo set_value('franchiseName'); ?>" />
                                                <span class="text-danger"><?php echo form_error('franchiseName'); ?></span>
                                            </div>
                                        </div>

                                    </div>

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
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('last_name'); ?></label>
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
                                                <label for="exampleInputEmail1"><?php echo $this->lang->line('mobile_no'); ?></label>
                                                <input id="mobileno" name="mobileno" placeholder="" type="text" class="form-control"  value="<?php echo set_value('mobileno'); ?>" />
                                                <span class="text-danger"><?php echo form_error('mobileno'); ?></span>
                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <label for="exampleInputEmail1"><?php echo $this->lang->line('perm_addr'); ?></label>
                                            <textarea id="perm_addr" name="perm_addr" placeholder="" class="form-control" rows="2"><?php echo set_value('perm_addr'); ?></textarea>
                                            <span class="text-danger"><?php echo form_error('perm_addr'); ?></span>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="table-wrapper">
                                            <div class="table-title">
                                                <div class="row">
                                                    <div class="col-sm-8"><h5><u><?php echo $this->lang->line('edu_backgrnd'); ?></u></h5></div>
                                                    <div class="col-sm-4">
                                                        <button type="button" id="addNewEdu_backgrnd" class="btn btn-secondary add-new"><i class="fa fa-plus"></i> Add New</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-bordered edu_backgrnd">
                                                <thead>
                                                    <tr>
                                                        <th><?php echo $this->lang->line('exam'); ?></th>
                                                        <th><?php echo $this->lang->line('subj'); ?></th>
                                                        <th><?php echo $this->lang->line('board_university'); ?></th>
                                                        <th><?php echo $this->lang->line('yop'); ?></th>
                                                        <th class="action">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td>
                                                            <a class="add" id="addEdu_backgrnd" title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                            <a class="edit" id="editEdu_backgrnd" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                            <a class="delete" id="deleteEdu_backgrnd" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="table-wrapper">
                                            <div class="table-title">
                                                <div class="row">
                                                    <div class="col-sm-8"><h5><u><?php echo $this->lang->line('training_skills'); ?></u></h5></div>
                                                    <div class="col-sm-4">
                                                        <button type="button" id="addNewTraining_skills" class="btn btn-secondary add-new"><i class="fa fa-plus"></i> Add New</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-bordered training-skills">
                                                <thead>
                                                    <tr>
                                                        <th><?php echo $this->lang->line('exam_course_diploma'); ?></th>
                                                        <th><?php echo $this->lang->line('board_university'); ?></th>
                                                        <th><?php echo $this->lang->line('yop'); ?></th>
                                                        <th class="action">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td>
                                                            <a class="add" id="addTraining_skills" title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                            <a class="edit" id="editTraining_skills" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                            <a class="delete" id="deleteTraining_skills" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="table-wrapper">
                                            <div class="table-title">
                                                <div class="row">
                                                    <div class="col-sm-8"><h5><u><?php echo $this->lang->line('emp_exp'); ?></u></h5></div>
                                                    <div class="col-sm-4">
                                                        <button type="button" id="addNewEmp_exp" class="btn btn-secondary add-new"><i class="fa fa-plus"></i> Add New</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-bordered emp_exp">
                                                <thead>
                                                    <tr>
                                                        <th><?php echo $this->lang->line('emp_info'); ?></th>
                                                        <th><?php echo $this->lang->line('f_designation'); ?></th>
                                                        <th><?php echo $this->lang->line('period_emp'); ?></th>
                                                        <th class="action">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td>
                                                            <a class="add" id="addEmp_exp" title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                            <a class="edit" id="editEmp_exp" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                            <a class="delete" id="deleteEmp_exp" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="table-wrapper">
                                            <div class="table-title">
                                                <div class="row">
                                                    <div class="col-sm-8"><h5><u><?php echo $this->lang->line('buss_exp'); ?></u></h5></div>
                                                    <div class="col-sm-4">
                                                        <button type="button" id="addNewBuss_exp" class="btn btn-secondary add-new"><i class="fa fa-plus"></i> Add New</button>
                                                    </div>
                                                </div>
                                            </div>
                                            <table class="table table-bordered buss_exp">
                                                <thead>
                                                    <tr>
                                                        <th><?php echo $this->lang->line('business_ventures'); ?></th>
                                                        <th><?php echo $this->lang->line('f_partnership'); ?></th>
                                                        <th><?php echo $this->lang->line('addr_headOff'); ?></th>
                                                        <th><?php echo $this->lang->line('anuual_turnover'); ?></th>
                                                        <th class="action">Actions</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                        <td>
                                                            <a class="add" id="addBuss_exp" title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                            <a class="edit" id="editBuss_exp" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                            <a class="delete" id="deleteBuss_exp" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            
                            <div class="box-group collapsed-box">
                                <div class="panel box collapsed-box border0 mb0">
                                    <div class="addmoredetail-title">

                                        <a data-widget="collapse" data-original-title="Collapse" class="collapsed btn boxplus">
                                            <i class="fa fa-fw fa-plus"></i><?php echo $this->lang->line('f_infrastructure'); ?>
                                        </a>

                                    </div>
                                    <div class="box-body">
                                        <div class="tshadow mb25 bozero">
                                            <h4 class="pagetitleh2"><?php echo $this->lang->line('question1'); ?></h4>
                                            <div class="row around10">
                                                <div class="col-md-12">
                                                    <div class="radio">
                                                        <label class="radio-inline"><input type="radio" name="question1Info" class="question1Info" value="Society"> <?php echo $this->lang->line('f_society'); ?></label>
                                                        <label class="radio-inline"><input type="radio" name="question1Info" class="question1Info" value="Trust"> <?php echo $this->lang->line('f_trust'); ?></label>
                                                        <label class="radio-inline"><input type="radio" name="question1Info" class="question1Info" value="Other"> <?php echo $this->lang->line('f_other'); ?></label>
                                                        <label class="radio-inline"><input type="radio" name="question1Info" class="question1Info" value="Not Decided Yet"> <?php echo $this->lang->line('f_nyd'); ?></label>
                                                    </div>
                                                    <div class="form-group" id="f_otherDiv">
                                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('please_explain'); ?></label>
                                                        <textarea id="question1_explain" name="question1_explain" placeholder="" class="form-control"></textarea>
                                                        <span class="text-danger"><?php echo form_error('question1_explain'); ?></span>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="tshadow mb25 bozero">
                                            <h4 class="pagetitleh2"><?php echo $this->lang->line('furnish_details'); ?></h4>
                                            <div class="row around10">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('tot_no_mem'); ?></label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <textarea id="tot_no_mem" name="tot_no_mem" placeholder="" class="form-control"></textarea>
                                                        <span class="text-danger"><?php echo form_error('tot_no_mem'); ?></span>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="table-wrapper">
                                                        <div class="table-title">
                                                            <div class="row">
                                                                <div class="col-sm-8"><h5><?php echo $this->lang->line('ent_furnish_details'); ?></h5></div>
                                                                <div class="col-sm-4">
                                                                    <button type="button" id="addNewEnt_furnish_details" class="btn btn-secondary add-new"><i class="fa fa-plus"></i> Add New</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table class="table table-bordered ent_furnish_details">
                                                            <thead>
                                                                <tr>
                                                                    <th><?php echo $this->lang->line('business_ventures'); ?></th>
                                                                    <th><?php echo $this->lang->line('tot_yrs_op'); ?></th>
                                                                    <th><?php echo $this->lang->line('period_emp'); ?></th>
                                                                    <th class="action">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td>
                                                                        <a class="add" id="addEnt_furnish_details"title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                                        <a class="edit" id="editEnt_furnish_details" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                                        <a class="delete" id="deleteEnt_furnish_details" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tshadow mb25 bozero">
                                            <h4 class="pagetitleh2"><?php echo $this->lang->line('details_day_to_day_working_person'); ?></h4>
                                            <div class="row around10">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('full_name'); ?></label>
                                                        <textarea id="full_name" name="full_name" placeholder="" class="form-control"></textarea>
                                                        <span class="text-danger"><?php echo form_error('full_name'); ?></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('working_person_qualification'); ?></label>
                                                        <textarea id="working_person_qualification" name="working_person_qualification" placeholder="" class="form-control"></textarea>
                                                        <span class="text-danger"><?php echo form_error('working_person_qualification'); ?></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('mobile_no'); ?></label>
                                                        <textarea id="mobile_no" name="mobile_no" placeholder="" class="form-control"></textarea>
                                                        <span class="text-danger"><?php echo form_error('mobile_no'); ?></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('working_person_age'); ?></label>
                                                        <textarea id="working_person_age" name="working_person_age" placeholder="" class="form-control"></textarea>
                                                        <span class="text-danger"><?php echo form_error('working_person_age'); ?></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('working_person_wexp'); ?></label>
                                                        <textarea id="working_person_wexp" name="working_person_wexp" placeholder="" class="form-control"></textarea>
                                                        <span class="text-danger"><?php echo form_error('working_person_wexp'); ?></span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('email'); ?></label>
                                                        <textarea id="email" name="email" placeholder="" class="form-control"></textarea>
                                                        <span class="text-danger"><?php echo form_error('email'); ?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tshadow mb25 bozero">
                                            <h4 class="pagetitleh2"><?php echo $this->lang->line('question2'); ?></h4>
                                            <div class="row around10">
                                                <div class="col-md-6">
                                                    <div class="radio">
                                                        <label class="radio-inline"><input type="radio" name="question2Info" class="question2Info" value="Very Familiar"> <?php echo $this->lang->line('very_familiar'); ?></label>
                                                        <label class="radio-inline"><input type="radio" name="question2Info" class="question2Info" value="Basic Knowledge"> <?php echo $this->lang->line('basic_knowledge'); ?></label>
                                                        <label class="radio-inline"><input type="radio" name="question2Info" class="question2Info" value="Information"> <?php echo $this->lang->line('f_information'); ?></label>
                                                        <label class="radio-inline"><input type="radio" name="question2Info" class="question2Info" value="No Experience"> <?php echo $this->lang->line('no_exp'); ?></label>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tshadow mb25 bozero">
                                            <h4 class="pagetitleh2"><?php echo $this->lang->line('question3'); ?></h4>
                                            <div class="row around10">
                                                <div class="col-md-6">
                                                    <div class="radio">
                                                            <label class="radio-inline"><input type="radio" name="question3_yesNo" class="question3_yesNo"value="Yes"><?php echo $this->lang->line('yes'); ?></label>
                                                            <label class="radio-inline"><input type="radio" name="question3_yesNo" class="question3_yesNo" value="No"><?php echo $this->lang->line('no'); ?></label>
                                                    </div>
                                                </div>
                                                <div class="row question3Div">
                                                    <div class="table-wrapper">
                                                        <div class="table-title">
                                                            <div class="row">
                                                                <div class="col-sm-8"><h5><?php echo $this->lang->line('yes_then_details'); ?></h5></div>
                                                                <div class="col-sm-4">
                                                                    <button type="button" id="addNewQuestion3" class="btn btn-secondary add-new"><i class="fa fa-plus"></i> Add New</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table class="table table-bordered question3">
                                                            <thead>
                                                                <tr>
                                                                    <th><?php echo $this->lang->line('name_institute_loc'); ?></th>
                                                                    <th><?php echo $this->lang->line('name_franchisor'); ?></th>
                                                                    <th><?php echo $this->lang->line('num_students'); ?></th>
                                                                    <th><?php echo $this->lang->line('course_off'); ?></th>
                                                                    <th class="action">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td>
                                                                        <a class="add" id="addQuestion3" title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                                        <a class="edit" id="editQuestion3" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                                        <a class="delete" id="deleteQuestion3" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tshadow mb25 bozero">
                                            <h4 class="pagetitleh2"><?php echo $this->lang->line('question4'); ?></h4>
                                            <div class="row around10">
                                                <div class="col-md-6">
                                                    <div class="radio">
                                                            <label class="radio-inline"><input type="radio" name="question4_yesNo" class="question4_yesNo" value="Yes"><?php echo $this->lang->line('yes'); ?></label>
                                                            <label class="radio-inline"><input type="radio" name="question4_yesNo" class="question4_yesNo" value="No"><?php echo $this->lang->line('no'); ?></label>
                                                    </div>
                                                </div>
                                                <div class="row question4Div">
                                                    <div class="table-wrapper">
                                                        <div class="table-title">
                                                            <div class="row">
                                                                <div class="col-sm-8"><h5><?php echo $this->lang->line('yes_then_details'); ?></h5></div>
                                                                <div class="col-sm-4">
                                                                    <button type="button" id="addNewQuestion4" class="btn btn-secondary add-new"><i class="fa fa-plus"></i> Add New</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table class="table table-bordered question4">
                                                            <thead>
                                                                <tr>
                                                                    <th><?php echo $this->lang->line('name_centre_institute'); ?></th>
                                                                    <th><?php echo $this->lang->line('name_trust_society'); ?></th>
                                                                    <th><?php echo $this->lang->line('annual_turnover_fy'); ?></th>
                                                                    <th><?php echo $this->lang->line('num_emps'); ?></th>
                                                                    <th class="action">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td>
                                                                        <a class="add" id="addQuestion4" title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                                        <a class="edit" id="editQuestion4" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                                        <a class="delete" id="deleteQuestion4" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tshadow mb25 bozero">
                                            <h4 class="pagetitleh2"><?php echo $this->lang->line('question5'); ?></h4>
                                            <div class="row around10">
                                                <div class="col-md-12">
                                                    <div class="radio">
                                                        <label class="radio-inline"><input type="radio" name="finance" class="finance" value="Self Finance"> <?php echo $this->lang->line('self_finance'); ?></label>
                                                        <label class="radio-inline"><input type="radio" name="finance" class="finance" value="Bank Finance"> <?php echo $this->lang->line('bank_finance'); ?></label>
                                                        <label class="radio-inline"><input type="radio" name="finance" class="finance" value="Other"> <?php echo $this->lang->line('other_finance'); ?></label>
                                                    </div>
                                                    <div class="form-group" id="otherFinanced_Div">
                                                        <label for="exampleInputEmail1"><?php echo $this->lang->line('please_explain'); ?></label>
                                                        <textarea id="question5_explain" name="question5_explain" placeholder="" class="form-control"></textarea>
                                                        <span class="text-danger"><?php echo form_error('question5_explain'); ?></span>
                                                    </div>
                                                </div>

                                                <div class="row" id="selfFinanced_Div">
                                                    <div class="table-wrapper">
                                                        <div class="table-title">
                                                            <div class="row">
                                                                <div class="col-sm-8"><h5><?php echo $this->lang->line('if_self_financed'); ?></h5></div>
                                                                <div class="col-sm-4">
                                                                    <button type="button" id="addNewSelf_financed" class="btn btn-secondary add-new"><i class="fa fa-plus"></i> Add New</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table class="table table-bordered self_financed">
                                                            <thead>
                                                                <tr>
                                                                    <th><?php echo $this->lang->line('full_name'); ?></th>
                                                                    <th><?php echo $this->lang->line('amt_available'); ?></th>
                                                                    <th><?php echo $this->lang->line('time_required_mobilize'); ?></th>
                                                                    <th class="action">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td>
                                                                        <a class="add" id="addSelf_financed" title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                                        <a class="edit" id="editSelf_financed" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                                        <a class="delete" id="deleteSelf_financed" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                                <div class="row" id="bankFinanced_Div">
                                                    <div class="table-wrapper">
                                                        <div class="table-title">
                                                            <div class="row">
                                                                <div class="col-sm-8"><h5><?php echo $this->lang->line('if_bank_financed'); ?></h5></div>
                                                                <div class="col-sm-4">
                                                                    <button type="button" id="addNewBank_financed" class="btn btn-secondary add-new"><i class="fa fa-plus"></i> Add New</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table class="table table-bordered bank_financed">
                                                            <thead>
                                                                <tr>
                                                                    <th><?php echo $this->lang->line('f_bank_name'); ?></th>
                                                                    <th><?php echo $this->lang->line('amt_req'); ?></th>
                                                                    <th><?php echo $this->lang->line('time_required_mobilize'); ?></th>
                                                                    <th class="action">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td>
                                                                        <a class="add" id="addBank_financed" title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                                        <a class="edit" id="editBank_financed" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                                        <a class="delete" id="deleteBank_financed" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="tshadow mb25 bozero">
                                            <h4 class="pagetitleh2"><?php echo $this->lang->line('list_of_city_name'); ?></h4>
                                            <div class="row around10">
                                                <div class="row">
                                                    <div class="table-wrapper">
                                                        <div class="table-title">
                                                            <div class="row">
                                                                <div class="col-sm-8"><h5><?php echo $this->lang->line('list_of_city_name_note'); ?></h5></div>
                                                                <div class="col-sm-4">
                                                                    <button type="button" id="addNewFranchiseInterested_locations" class="btn btn-secondary add-new"><i class="fa fa-plus"></i> Add New</button>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <table class="table table-bordered franchiseInterested_locations">
                                                            <thead>
                                                                <tr>
                                                                    <th><?php echo $this->lang->line('name_loc'); ?></th>
                                                                    <th><?php echo $this->lang->line('population'); ?></th>
                                                                    <th><?php echo $this->lang->line('reason_for_loc'); ?></th>
                                                                    <th class="action">Actions</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td><font color="#D3D3D3">Click on edit to add data</font></td>
                                                                    <td>
                                                                        <a class="add" id="addFranchiseInterested_locations" title="Add" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                                        <a class="edit" id="editFranchiseInterested_locations" title="Edit" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                                        <a class="delete" id="deleteFranchiseInterested_locations" title="Delete" data-toggle="tooltip"><i class="material-icons"></i></a>
                                                                    </td>
                                                                </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                           
                                    </div>
                                </div>
                            </div>
                                    
                            <div class="box-footer">
                                <button type="submit" class="btn btn-primary pull-right"><?php echo $this->lang->line('submit'); ?></button>
                            </div>
                    </form>
                </div>
            </div>
        </div>
</div>
</section>
</div>

<script type="text/javascript">


    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();

        /**
         * On Events perform actions
         */
        $("#f_otherDiv").hide();
        $(".question1Info").click(function () {
            if ($(this).val() == "Other") {
                $("#f_otherDiv").show();
            } else {
                $("#f_otherDiv").hide();
            }
        });
        

        $(".question3Div").hide();
        $(".question3_yesNo").click(function () {
            if ($(this).val() == "Yes") 
            {
                $(".question3Div").show();
            }
            else
            {
                $(".question3Div").hide();
            }
        });

        $(".question4Div").hide();
        $(".question4_yesNo").click(function () {
            if ($(this).val() == "Yes") 
            {
                $(".question4Div").show();
            }
            else
            {
                $(".question4Div").hide();
            }
        });

        $("#selfFinanced_Div").hide();
        $("#bankFinanced_Div").hide();
        $("#otherFinanced_Div").hide();
        $(".finance").click(function () {
            if ($(this).val() == "Self Finance") 
            {
                $("#selfFinanced_Div").show();
                $("#bankFinanced_Div").hide();
                $("#otherFinanced_Div").hide();
            } 
            else if ($(this).val() == "Bank Finance") 
            {
                $("#bankFinanced_Div").show();
                $("#selfFinanced_Div").hide();
                $("#otherFinanced_Div").hide();
            } 
            else
            {
                $("#otherFinanced_Div").show();
                $("#selfFinanced_Div").hide();
                $("#bankFinanced_Div").hide();
            }
        });

        /** Education Background Table **/

        var actions_Edu = $(".edu_backgrnd td:last-child").html();
        $("#addNewEdu_backgrnd").click(function(){
            $(this).attr("disabled", "disabled");
            var index = $(".edu_backgrnd tbody tr:last-child").index();
            var row = '<tr>' +
                '<td><input type="text" class="form-control" name="exam_details" id="exam_details"></td>' +
                '<td><input type="text" class="form-control" name="subj_details" id="subj_details"></td>' +
                '<td><input type="text" class="form-control" name="board" id="board"></td>' +
                '<td><input type="text" class="form-control" name="year_passing" id="year_passing"></td>' +
                '<td>' + actions_Edu + '</td>' +
            '</tr>';
            $(".edu_backgrnd").append(row);		
            $(".edu_backgrnd tbody tr").eq(index + 1).find("#addEdu_backgrnd, #editEdu_backgrnd").toggle();
            $('[data-toggle="tooltip"]').tooltip();
        });
        $(document).on("click", "#addEdu_backgrnd", function(){
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
                $(this).parents("tr").find("#addEdu_backgrnd, #editEdu_backgrnd").toggle();
                $("#addNewEdu_backgrnd").removeAttr("disabled");
            }		
        });
        $(document).on("click", "#editEdu_backgrnd", function(){		
            $(this).parents("tr").find("td:not(:last-child)").each(function(){
                $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            });		
            $(this).parents("tr").find("#addEdu_backgrnd, #editEdu_backgrnd").toggle();
            $("#addNewEdu_backgrnd").attr("disabled", "disabled");
        });
        $(document).on("click", "#deleteEdu_backgrnd", function(){
            $(this).parents("tr").remove();
            $("#addNewEdu_backgrnd").removeAttr("disabled");
        });

        /** Specialized Training/Skills Table **/

        var actions_TS = $(".training-skills td:last-child").html();
        $("#addNewTraining_skills").click(function(){
            $(this).attr("disabled", "disabled");
            var index = $(".training-skills tbody tr:last-child").index();
            var row = '<tr>' +
                '<td><input type="text" class="form-control" name="exam_course_diploma" id="exam_course_diploma"></td>' +
                '<td><input type="text" class="form-control" name="board_university" id="board_university"></td>' +
                '<td><input type="text" class="form-control" name="yop" id="yop"></td>' +
                '<td>' + actions_TS + '</td>' +
            '</tr>';
            $(".training-skills").append(row);		
            $(".training-skills tbody tr").eq(index + 1).find("#addTraining_skills, #editTraining_skills").toggle();
            $('[data-toggle="tooltip"]').tooltip();
        });
        $(document).on("click", "#addTraining_skills", function(){
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
                $(this).parents("tr").find("#addTraining_skills, #editTraining_skills").toggle();
                $("#addNewTraining_skills").removeAttr("disabled");
            }		
        });
        $(document).on("click", "#editTraining_skills", function(){		
            $(this).parents("tr").find("td:not(:last-child)").each(function(){
                $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            });		
            $(this).parents("tr").find("#addTraining_skills, #editTraining_skills").toggle();
            $("#addNewTraining_skills").attr("disabled", "disabled");
        });
        $(document).on("click", "#deleteTraining_skills", function(){
            $(this).parents("tr").remove();
            $("#addNewTraining_skills").removeAttr("disabled");
        });

        /** Employment Experience Table **/

        var actions_Exp = $(".emp_exp td:last-child").html();
        $("#addNewEmp_exp").click(function(){
            $(this).attr("disabled", "disabled");
            var index = $(".emp_exp tbody tr:last-child").index();
            var row = '<tr>' +
                '<td><input type="text" class="form-control" name="emp_info" id="emp_info"></td>' +
                '<td><input type="text" class="form-control" name="f_designation" id="f_designation"></td>' +
                '<td><input type="text" class="form-control" name="period_emp" id="period_emp"></td>' +
                '<td>' + actions_Exp + '</td>' +
            '</tr>';
            $(".emp_exp").append(row);		
            $(".emp_exp tbody tr").eq(index + 1).find("#addEmp_exp, #editEmp_exp").toggle();
            $('[data-toggle="tooltip"]').tooltip();
        });
        $(document).on("click", "#addEmp_exp", function(){
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
                $(this).parents("tr").find("#addEmp_exp, #editEmp_exp").toggle();
                $("#addNewEmp_exp").removeAttr("disabled");
            }		
        });
        $(document).on("click", "#editEmp_exp", function(){		
            $(this).parents("tr").find("td:not(:last-child)").each(function(){
                $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            });		
            $(this).parents("tr").find("#addEmp_exp, #editEmp_exp").toggle();
            $("#addNewEmp_exp").attr("disabled", "disabled");
        });
        $(document).on("click", "#deleteEmp_exp", function(){
            $(this).parents("tr").remove();
            $("#addNewEmp_exp").removeAttr("disabled");
        });

        /** Business Experience Table **/

        var actions_BExp = $(".buss_exp td:last-child").html();
        $("#addNewBuss_exp").click(function(){
            $(this).attr("disabled", "disabled");
            var index = $(".buss_exp tbody tr:last-child").index();
            var row = '<tr>' +
                '<td><input type="text" class="form-control" name="business_ventures" id="business_ventures"></td>' +
                '<td><input type="text" class="form-control" name="f_partnership" id="f_partnership"></td>' +
                '<td><input type="text" class="form-control" name="addr_headOff" id="addr_headOff"></td>' +
                '<td><input type="text" class="form-control" name="anuual_turnover" id="anuual_turnover"></td>' +
                '<td>' + actions_BExp + '</td>' +
            '</tr>';
            $(".buss_exp").append(row);		
            $(".buss_exp tbody tr").eq(index + 1).find("#addBuss_exp, #editBuss_exp").toggle();
            $('[data-toggle="tooltip"]').tooltip();
        });
        $(document).on("click", "#addBuss_exp", function(){
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
                $(this).parents("tr").find("#addBuss_exp, #editBuss_exp").toggle();
                $("#addNewBuss_exp").removeAttr("disabled");
            }		
        });
        $(document).on("click", "#editBuss_exp", function(){		
            $(this).parents("tr").find("td:not(:last-child)").each(function(){
                $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            });		
            $(this).parents("tr").find("#addBuss_exp, #editBuss_exp").toggle();
            $("#addNewBuss_exp").attr("disabled", "disabled");
        });
        $(document).on("click", "#deleteBuss_exp", function(){
            $(this).parents("tr").remove();
            $("#addNewBuss_exp").removeAttr("disabled");
        });

        /** Entities Furnish details Table **/

        var actions_EF = $(".ent_furnish_details td:last-child").html();
        $("#addNewEnt_furnish_details").click(function(){
            $(this).attr("disabled", "disabled");
            var index = $(".ent_furnish_details tbody tr:last-child").index();
            var row = '<tr>' +
                '<td><input type="text" class="form-control" name="business_ventures" id="business_ventures"></td>' +
                '<td><input type="text" class="form-control" name="tot_yrs_op" id="tot_yrs_op"></td>' +
                '<td><input type="text" class="form-control" name="period_emp" id="period_emp"></td>' +
                '<td>' + actions_EF + '</td>' +
            '</tr>';
            $(".ent_furnish_details").append(row);		
            $(".ent_furnish_details tbody tr").eq(index + 1).find("#addEnt_furnish_details, #editEnt_furnish_details").toggle();
            $('[data-toggle="tooltip"]').tooltip();
        });
        $(document).on("click", "#addEnt_furnish_details", function(){
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
                $(this).parents("tr").find("#addEnt_furnish_details, #editEnt_furnish_details").toggle();
                $("#addNewEnt_furnish_details").removeAttr("disabled");
            }		
        });
        $(document).on("click", "#editEnt_furnish_details", function(){		
            $(this).parents("tr").find("td:not(:last-child)").each(function(){
                $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            });		
            $(this).parents("tr").find("#addEnt_furnish_details, #editEnt_furnish_details").toggle();
            $("#addNewEnt_furnish_details").attr("disabled", "disabled");
        });
        $(document).on("click", "#deleteEnt_furnish_details", function(){
            $(this).parents("tr").remove();
            $("#addNewEnt_furnish_details").removeAttr("disabled");
        });

        /** Question3 details Table **/
        
        var actions_Q3 = $(".question3 td:last-child").html();
        $("#addNewQuestion3").click(function(){
            $(this).attr("disabled", "disabled");
            var index = $(".question3 tbody tr:last-child").index();
            var row = '<tr>' +
                '<td><input type="text" class="form-control" name="name_institute_loc" id="name_institute_loc"></td>' +
                '<td><input type="text" class="form-control" name="name_franchisor" id="name_franchisor"></td>' +
                '<td><input type="text" class="form-control" name="num_students" id="num_students"></td>' +
                '<td><input type="text" class="form-control" name="course_off" id="course_off"></td>' +
                '<td>' + actions_Q3 + '</td>' +
            '</tr>';
            $(".question3").append(row);		
            $(".question3 tbody tr").eq(index + 1).find("#addQuestion3, #editQuestion3").toggle();
            $('[data-toggle="tooltip"]').tooltip();
        });
        $(document).on("click", "#addQuestion3", function(){
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
                $(this).parents("tr").find("#addQuestion3, #editQuestion3").toggle();
                $("#addNewQuestion3").removeAttr("disabled");
            }		
        });
        $(document).on("click", "#editQuestion3", function(){		
            $(this).parents("tr").find("td:not(:last-child)").each(function(){
                $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            });		
            $(this).parents("tr").find("#addQuestion3, #editQuestion3").toggle();
            $("#addNewQuestion3").attr("disabled", "disabled");
        });
        $(document).on("click", "#deleteQuestion3", function(){
            $(this).parents("tr").remove();
            $("#addNewQuestion3").removeAttr("disabled");
        });

        /** Question4 details Table **/
        
        var actions_Q4 = $(".question4 td:last-child").html();
        $("#addNewQuestion4").click(function(){
            $(this).attr("disabled", "disabled");
            var index = $(".question4 tbody tr:last-child").index();
            var row = '<tr>' +
                '<td><input type="text" class="form-control" name="name_centre_institute" id="name_centre_institute"></td>' +
                '<td><input type="text" class="form-control" name="name_trust_society" id="name_trust_society"></td>' +
                '<td><input type="text" class="form-control" name="annual_turnover_fy" id="annual_turnover_fy"></td>' +
                '<td><input type="text" class="form-control" name="num_emps" id="num_emps"></td>' +
                '<td>' + actions_Q4 + '</td>' +
            '</tr>';
            $(".question4").append(row);		
            $(".question4 tbody tr").eq(index + 1).find("#addQuestion4, #editQuestion4").toggle();
            $('[data-toggle="tooltip"]').tooltip();
        });
        $(document).on("click", "#addQuestion4", function(){
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
                $(this).parents("tr").find("#addQuestion4, #editQuestion4").toggle();
                $("#addNewQuestion4").removeAttr("disabled");
            }		
        });
        $(document).on("click", "#editQuestion4", function(){		
            $(this).parents("tr").find("td:not(:last-child)").each(function(){
                $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            });		
            $(this).parents("tr").find("#addQuestion4, #editQuestion4").toggle();
            $("#addNewQuestion4").attr("disabled", "disabled");
        });
        $(document).on("click", "#deleteQuestion4", function(){
            $(this).parents("tr").remove();
            $("#addNewQuestion4").removeAttr("disabled");
        });

        /** Self Financed details Table **/
        
        var actions_SF = $(".self_financed td:last-child").html();
        $("#addNewSelf_financed").click(function(){
            $(this).attr("disabled", "disabled");
            var index = $(".self_financed tbody tr:last-child").index();
            var row = '<tr>' +
                '<td><input type="text" class="form-control" name="full_name" id="full_name"></td>' +
                '<td><input type="text" class="form-control" name="amt_available" id="amt_available"></td>' +
                '<td><input type="text" class="form-control" name="time_required_mobilize" id="time_required_mobilize"></td>' +
                '<td>' + actions_SF + '</td>' +
            '</tr>';
            $(".self_financed").append(row);		
            $(".self_financed tbody tr").eq(index + 1).find("#addSelf_financed, #editSelf_financed").toggle();
            $('[data-toggle="tooltip"]').tooltip();
        });
        $(document).on("click", "#addSelf_financed", function(){
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
                $(this).parents("tr").find("#addSelf_financed, #editSelf_financed").toggle();
                $("#addNewSelf_financed").removeAttr("disabled");
            }		
        });
        $(document).on("click", "#editSelf_financed", function(){		
            $(this).parents("tr").find("td:not(:last-child)").each(function(){
                $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            });		
            $(this).parents("tr").find("#addSelf_financed, #editSelf_financed").toggle();
            $("#addNewSelf_financed").attr("disabled", "disabled");
        });
        $(document).on("click", "#deleteSelf_financed", function(){
            $(this).parents("tr").remove();
            $("#addNewSelf_financed").removeAttr("disabled");
        });

        /** Bank Financed details Table **/

        var actions_BF = $(".bank_financed td:last-child").html();
        $("#addNewBank_financed").click(function(){
            $(this).attr("disabled", "disabled");
            var index = $(".bank_financed tbody tr:last-child").index();
            var row = '<tr>' +
                '<td><input type="text" class="form-control" name="f_bank_name" id="f_bank_name"></td>' +
                '<td><input type="text" class="form-control" name="amt_req" id="amt_req"></td>' +
                '<td><input type="text" class="form-control" name="time_required_mobilize" id="time_required_mobilize"></td>' +
                '<td>' + actions_BF + '</td>' +
            '</tr>';
            $(".bank_financed").append(row);		
            $(".bank_financed tbody tr").eq(index + 1).find("#addBank_financed, #editBank_financed").toggle();
            $('[data-toggle="tooltip"]').tooltip();
        });
        $(document).on("click", "#addBank_financed", function(){
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
                $(this).parents("tr").find("#addBank_financed, #editBank_financed").toggle();
                $("#addNewBank_financed").removeAttr("disabled");
            }		
        });
        $(document).on("click", "#editBank_financed", function(){		
            $(this).parents("tr").find("td:not(:last-child)").each(function(){
                $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            });		
            $(this).parents("tr").find("#addBank_financed, #editBank_financed").toggle();
            $("#addNewBank_financed").attr("disabled", "disabled");
        });
        $(document).on("click", "#deleteBank_financed", function(){
            $(this).parents("tr").remove();
            $("#addNewBank_financed").removeAttr("disabled");
        });

        /**  Cities where you are interested to open our School franchisee details Table **/

        var actions_franchiseLoc = $(".franchiseInterested_locations td:last-child").html();
        $("#addNewFranchiseInterested_locations").click(function(){
            $(this).attr("disabled", "disabled");
            var index = $(".franchiseInterested_locations tbody tr:last-child").index();
            var row = '<tr>' +
                '<td><input type="text" class="form-control" name="name_loc" id="name_loc"></td>' +
                '<td><input type="text" class="form-control" name="population" id="population"></td>' +
                '<td><input type="text" class="form-control" name="reason_for_loc" id="reason_for_loc"></td>' +
                '<td>' + actions_franchiseLoc + '</td>' +
            '</tr>';
            $(".franchiseInterested_locations").append(row);		
            $(".franchiseInterested_locations tbody tr").eq(index + 1).find("#addFranchiseInterested_locations, #editFranchiseInterested_locations").toggle();
            $('[data-toggle="tooltip"]').tooltip();
        });
        $(document).on("click", "#addFranchiseInterested_locations", function(){
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
                $(this).parents("tr").find("#addFranchiseInterested_locations, #editFranchiseInterested_locations").toggle();
                $("#addNewFranchiseInterested_locations").removeAttr("disabled");
            }		
        });
        $(document).on("click", "#editFranchiseInterested_locations", function(){		
            $(this).parents("tr").find("td:not(:last-child)").each(function(){
                $(this).html('<input type="text" class="form-control" value="' + $(this).text() + '">');
            });		
            $(this).parents("tr").find("#addFranchiseInterested_locations, #editFranchiseInterested_locations").toggle();
            $("#addNewFranchiseInterested_locations").attr("disabled", "disabled");
        });
        $(document).on("click", "#deleteFranchiseInterested_locations", function(){
            $(this).parents("tr").remove();
            $("#addNewFranchiseInterested_locations").removeAttr("disabled");
        });


    });
</script>

<script type="text/javascript" src="<?php echo base_url(); ?>backend/dist/js/savemode.js"></script>
<style>
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

    table.table tr th, table.table tr td {
        border-color: #e9e9e9;
    }
    table.table th i {
        font-size: 13px;
        margin: 0 5px;
        cursor: pointer;
    }
    .action {
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