@extends('Dashboard.layout.layout')
@section('body')



<section class="vh-100">
    <div class="container" style="margin-top: 175px;">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col-12 col-lg-9 col-xl-7">
          <div class="card shadow-2-strong card-registration" style="border-radius: 15px;">
            <div class="card-body p-4 p-md-5">
              <h3 class="mb-4 pb-2 pb-md-0 mb-md-5">طلب دم</h3>
              <form> 
                <div class="row">
                 
                  <div class="col-md-6 mb-4">
  
                    <select class="select">
                        <option value="1" disabled> الفصيلة</option>
                        <option value="2">A+</option>
                        <option value="3">A-</option>
                        <option value="4">O+</option>
                        <option value="4">O-</option>
                        <option value="4">B+</option>
                        <option value="4">B-</option>
                        <option value="4">AB+</option>
                        <option value="4">AB-</option>
                      </select>
                      <label class="form-label select-label">الفصيلة</label>
  
                  </div>
                </div>
  
                <div class="row">
                  <div class="col-md-6 mb-4 d-flex align-items-center">
  
                    <div class="form-outline datepicker w-100">
                      <input type="text" class="form-control" id="birthdayDate" />
                      <label for="birthdayDate" class="form-label">الكمية</label>
                    </div>
  
                  </div>
                  <div class="col-md-6 mb-4">
  
                    <div class="form-outline datepicker w-100">
                        <input type="text" class="form-control" id="birthdayDate" />
                        <label for="birthdayDate" class="form-label">الوصف</label>
                      </div>
                  </div>
                </div>
  
                
  
                <div class="mt-3 pt-2">
                    <a class="button2" href="#" role="button">إرسال</a>
                </div>
  
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/popper.min.js"></script>
  <script src="js/jquery-3.6.3.min.js"></script>
  <script src="js/bootstrap.js"></script>

  @endsection