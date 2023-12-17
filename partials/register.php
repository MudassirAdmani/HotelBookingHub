<div class="modal fade" id="registerModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content registerModal">
            <form>
                <div class="modal-header border-0">
                    <h5 class="modal-title d-flex align-items-center">
                        <i class="bi bi-person-lines-fill fs-3 me-2"></i>
                        User Registration
                    </h5>
                    <button type="reset" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Name</label>
                                <input type="text" class="bg-transparent border-dark form-control shadow-none">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Email</label>
                                <input type="email" class="bg-transparent border-dark form-control shadow-none">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Phone</label>
                                <input type="number" class="bg-transparent border-dark form-control shadow-none">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Image</label>
                                <input type="file" class="bg-transparent border-dark form-control shadow-none">
                            </div>
                            <div class="col-md-12 mb-3">
                                <label class="form-label">Address</label>
                                <textarea rows="1" class="bg-transparent border-dark form-control shadow-none"></textarea>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Gender</label>
                                <select class="bg-transparent border-dark form-control shadow-none">
                                    <option value="male">Male</option>
                                    <option value="female">Female</option>
                                </select>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Date of Birth</label>
                                <input type="date" class="bg-transparent border-dark form-control shadow-none">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Password</label>
                                <input type="password" class="bg-transparent border-dark form-control shadow-none">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label class="form-label">Confirm Password</label>
                                <input type="password" class="bg-transparent border-dark form-control shadow-none">
                            </div>
                        </div>
                    </div>
                    <div class="my-1">
                        <button type="submit" class="py-1 px-3 border-0 rounded-1 form-control  btn-orange text-white">Register</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>