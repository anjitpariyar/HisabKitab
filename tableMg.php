<?php
$currentpage = 'Table Management';
include './template/header.php';
// include './template/nav.php';
?>

<main class="main">
        


<body class="font-montserrat">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
    </div>
</div>

<div id="main_content">
    
    <?php
        include './template/sidebar.php'
    ?>
     <div class="page">
        <?php include './template/TopHeader.php'?>
        <div class="section-body">
            <div class="container-fluid">
                <div class="d-flex justify-content-between align-items-center">
                    <ul class="nav nav-tabs page-header-tab">
                        <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#todo-list">Table List</a></li>
                        <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#todo-add">Add Table</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="section-body mt-3">
            <div class="container-fluid">
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="todo-list" role="tabpanel">
                        <div class="card">
                            <div class="card-body">
                                <div class="table-responsive todo_list">
                                    <table class="table table-hover table-striped table-vcenter mb-0 text-nowrap">
                                        <thead>
                                            <tr>
                                                <th>Table Name</th>
                                                <th class="w150 text-right">Table Capacity</th>
                                                <th class="w100">Status</th>
                                                <th class="w80">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                        <span class="custom-control-label">Table no 1</span>
                                                    </label>
                                                </td>
                                                <td class="text-right">6</td>
                                                <td><span class="tag tag-danger ml-0 mr-0">Booked</span></td>
                                                <td>
                                                   
                                              
                                                    <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Edit"><i class="dropdown-icon fa fa-edit"></i></a>
                                                    <a class="btn btn-sm btn-link hidden-xs js-sweetalert text-danger" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                                
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                        <span class="custom-control-label">Table no 2</span>
                                                    </label>
                                                </td>
                                                <td class="text-right">Feb 18-2019</td>
                                                <td><span class="tag tag-warning ml-0 mr-0">On Going</span></td>
                                                <td>
                                                <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Edit"><i class="dropdown-icon fa fa-edit"></i></a>
                                                    <a class="btn btn-sm btn-link hidden-xs js-sweetalert text-danger" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" >
                                                        <span class="custom-control-label">Table no 3</span>
                                                    </label>
                                                </td>
                                                <td class="text-right">March 02-2019</td>
                                                <td><span class="tag ml-0 mr-0 bg-none border-info border border-dark">Empty</span></td>
                                                <td>
                                                <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Edit"><i class="dropdown-icon fa fa-edit"></i></a>
                                                    <a class="btn btn-sm btn-link hidden-xs js-sweetalert text-danger" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" checked>
                                                        <span class="custom-control-label">Table no 5</span>
                                                    </label>
                                                </td>
                                                <td class="text-right">6</td>
                                                <td><span class="tag tag-danger ml-0 mr-0">Booked</span></td>
                                                <td>
                                                <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Edit"><i class="dropdown-icon fa fa-edit"></i></a>
                                                    <a class="btn btn-sm btn-link hidden-xs js-sweetalert text-danger" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                        <span class="custom-control-label">Table no 6</span>
                                                    </label>
                                                </td>
                                                <td class="text-right">Feb 18-2019</td>
                                                <td><span class="tag tag-warning ml-0 mr-0">On Going</span></td>
                                                <td>
                                                <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Edit"><i class="dropdown-icon fa fa-edit"></i></a>
                                                    <a class="btn btn-sm btn-link hidden-xs js-sweetalert text-danger" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1" >
                                                        <span class="custom-control-label">Table no 7</span>
                                                    </label>
                                                </td>
                                                <td class="text-right">March 02-2019</td>
                                                <td><span class="tag ml-0 mr-0 bg-none border-info border border-dark">Empty</span></td>
                                                <td>
                                                <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Edit"><i class="dropdown-icon fa fa-edit"></i></a>
                                                    <a class="btn btn-sm btn-link hidden-xs js-sweetalert text-danger" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                        <span class="custom-control-label">Table no 9</span>
                                                    </label>
                                                </td>
                                                <td class="text-right">March 20-2019</td>
                                                <td><span class="tag tag-warning ml-0 mr-0">On Going</span></td>
                                                <td>
                                                <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Edit"><i class="dropdown-icon fa fa-edit"></i></a>
                                                    <a class="btn btn-sm btn-link hidden-xs js-sweetalert text-danger" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input" name="example-checkbox1" value="option1">
                                                        <span class="custom-control-label">Table no 10</span>
                                                    </label>
                                                </td>
                                                <td class="text-right">March 20-2019</td>
                                                <td><span class="tag tag-warning ml-0 mr-0">On Going</span></td>
                                                <td>
                                                <a class="btn btn-sm btn-link" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Edit"><i class="dropdown-icon fa fa-edit"></i></a>
                                                    <a class="btn btn-sm btn-link hidden-xs js-sweetalert text-danger" data-type="confirm" href="javascript:void(0)" data-toggle="tooltip" title="" data-original-title="Delete"><i class="fa fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="todo-add" role="tabpanel">
                        <div class="card">

                            <form class="card-body">
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Table No <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <input type="number" class="form-control" value="10" readonly>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Table Capacity 	 <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <select class="form-control show-tick">
                                            <option selected disable value="0">Select</option>
                                            <option value="1">1</option>
                                            <option value="2">2</option>
                                            <option value="3">3</option>
                                            <option value="4">4</option>
                                            <option value="5">5</option>
                                            <option value="6">6</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label">Status <span class="text-danger">*</span></label>
                                    <div class="col-md-7">
                                        <select class="form-control show-tick" readonly>
                                            <option selected disable> Empty</option>
                                            
                                        </select>
                                    </div>
                                </div>
                              
                                
                                <div class="form-group row">
                                    <label class="col-md-3 col-form-label"></label>
                                    <div class="col-md-7">
                                        <button type="submit" class="btn btn-primary">Add Table</button>
                                        <button type="submit" class="btn btn-outline-secondary">Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php include './template/bottomFooter.php'?>
    </div>

</div>




</main>


<?php

include './template/footer.php';
?>