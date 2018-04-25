<?php $__env->startSection('content'); ?>
<section id="create-customer">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <a href="#" data-toggle="modal" data-target="#createCustomer">Create New Customer</a>
            </div>
        </div>
    </div>
</section>
<div class="modal fade" id="createCustomer" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="customer-create-form">
                        <form>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">Customer id:</label>
                                <div class="col-9">
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">customer name:</label>
                                <div class="col-9">
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">customer address:</label>
                                <div class="col-9">
                                    <textarea class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">select area:</label>
                                <div class="col-9">
                                    <select class="selectpicker" data-live-search="true" title=" ">
                                        <option>Medicine Specialist</option>
                                        <option>Cardiologist</option>
                                        <option>Skin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">select package:</label>
                                <div class="col-9">
                                    <select class="selectpicker" data-live-search="true" title=" ">
                                        <option>Medicine Specialist</option>
                                        <option>Cardiologist</option>
                                        <option>Skin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">select payment type:</label>
                                <div class="col-9">
                                    <select class="selectpicker" data-live-search="true" title=" ">
                                        <option>Medicine Specialist</option>
                                        <option>Cardiologist</option>
                                        <option>Skin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">select bill man:</label>
                                <div class="col-9">
                                    <select class="selectpicker" data-live-search="true" title=" ">
                                        <option>Medicine Specialist</option>
                                        <option>Cardiologist</option>
                                        <option>Skin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">connection fee:</label>
                                <div class="col-9">
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">monthly fee:</label>
                                <div class="col-9">
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-3 col-form-label">openning balance:</label>
                                <div class="col-9">
                                    <input type="number" class="form-control">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>