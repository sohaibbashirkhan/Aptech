          <div class="row mb-3">

<!-- Earnings (Monthly) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">All keys</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($total_keys) ?></div>

                    </div>
                    <div class="col-auto">
                      <i class="fas fa-key fa-2x text-primary"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Earnings (Annual) Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Pending</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($total_unusepending) ?></div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-key fa-2x text-success"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- New User Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Active</div>
                      <div class="h5 mb-0 mr-3 font-weight-bold text-gray-800"><?= number_format($total_unuseActive) ?></div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-key fa-2x text-info"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Pending Requests Card Example -->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card h-100">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-uppercase mb-1">Admins</div>
                      <div class="h5 mb-0 font-weight-bold text-gray-800"><?= number_format($total_admins) ?></div>
                      
                    </div>
                    <div class="col-auto">
                      <i class="fas fa-users fa-2x text-warning"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
                        </div>