<?php $__env->startSection('content'); ?>
<section id="create-customer">
    <div class="container">
        <div class="row">
            <div class="offset-md-2 col-md-8 col-sm-12">
                <div class="customer-create-form">
                    <form>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">Customer id:</label>
                            <div class="col-9">
                                <select class="selectpicker" data-live-search="true" title=" ">
                                    <option data-subtext="Mukul Uddin Pramanik">DCN-1712-00001</option>
                                    <option data-subtext="Hussain Sumrat">DCN-1712-00002</option>
                                    <option data-subtext="Ibrahim Mandal">DCN-1712-00003</option>
                                </select>
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
                            <label class="col-3 col-form-label">bill of month:</label>
                            <div class="col-9">
                                <select class="selectpicker" data-live-search="true" title=" ">
                                    <option>Medicine Specialist</option>
                                    <option>Cardiologist</option>
                                    <option>Skin</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">amount:</label>
                            <div class="col-9">
                                <input type="number" class="form-control">
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-3 col-form-label">paid by:</label>
                            <div class="col-9">
                                <select class="selectpicker" data-live-search="true" title=" ">
                                    <option>Medicine Specialist</option>
                                    <option>Cardiologist</option>
                                    <option>Skin</option>
                                </select>
                            </div>
                        </div>
                        <button type="submit" class="btn">submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>