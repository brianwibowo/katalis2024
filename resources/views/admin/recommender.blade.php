@extends('admin.layouts.app')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/admin/css/recommender.css') }}">
    <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">
    <link href="{{ asset('css/sb-admin-2.min.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="container-fluid">
        <div class="card shadow mb-4">
            <div class="card-header py-3 d-flex justify-content-between align-items-center">
                <h6 class="m-0 font-weight-bold text-primary">Crop Recommender</h6>
            </div>
            <div class="d-flex justify-content-around py-3">
                <button class="btn btn-sm btn-primary shadow-sm mx-3" data-toggle="modal" data-target="#cropModal">
                    <i class="fas fa-leaf fa-sm text-white-50"></i> Crop Recommender
                </button>
            </div>
        </div>
        <!-- Crop Recommender Modal -->
        <div class="modal fade" id="cropModal" tabindex="-1" role="dialog" aria-labelledby="cropModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="cropModalLabel">Crop Recommender</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="cropForm">
                            <div class="form-group">
                                <label for="nitrogen" class="form-label">Amount of Nitrogen in Soil</label>
                                <input type="text" class="form-control input-placeholder" id="nitrogen" required>
                            </div>
                            <div class="form-group">
                                <label for="phosphorous" class="form-label">Amount of Phosphorous in
                                    Soil</label>
                                <input type="text" class="form-control input-placeholder" id="phosphorous" required>
                            </div>
                            <div class="form-group">
                                <label for="potassium" class="form-label">Amount of Potassium in Soil</label>
                                <input type="text" class="form-control input-placeholder" id="potassium" required>
                            </div>
                            <div class="form-group">
                                <label for="temperature" class="form-label">Temperature (in Celsius)</label>
                                <input type="text" class="form-control input-placeholder" id="temperature" required>
                            </div>
                            <div class="form-group">
                                <label for="humidity" class="form-label">Humidity (in %)</label>
                                <input type="text" class="form-control input-placeholder" id="humidity" required>
                            </div>
                            <div class="form-group">
                                <label for="phValue" class="form-label">pH value of Soil</label>
                                <input type="text" class="form-control input-placeholder" id="phValue" required>
                            </div>
                                        <div class="form-group">
                                            <label for="modelType" class="form-label">Stacked Model Type</label>
                                            <select class="form-control" id="modelType" required>
                                                <option value="Select">Select</option>
                                                <option value="KNN">KNN</option>
                                                <option value="DT">Decision Tree (DT)</option>
                                                <option value="RFC">Random Forest Classifier (RFC)</option>
                                                <option value="GBC">Gradient Boosting Classifier (GBC)</option>
                                                <option value="SVM">Support Vector Machine (SVM)</option>
                                                <option value="ANN">Artificial Neural Network (ANN)</option>
                                            </select>
                                        </div>
                                        <button id="predictBtn" class="btn-predict">Predict Crop</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Prediction Modal -->
        <div class="modal fade" id="predictionModal" tabindex="-1" role="dialog" aria-labelledby="predictionModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                        <h2 class="modal-title" id="predictionModalLabel">Prediction: Rice Crop</h2>
                    </div>
                    <div class="modal-body">
                        <img src="rice_harvesting.jpg" alt="Rice Crop" class="prediction-img">
                        <p>
                            Harvesting is the process of collecting the mature rice crop from the field.
                            Depending on the variety, a rice crop usually reaches maturity at around 105–150
                            days after crop establishment...
                        </p>

                        <!-- Model Prediction Table -->
                        <div class="prediction-table">
                            <div class="prediction-card">
                                <h4>Prediction</h4>
                                <p>Rice (99.84%)</p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="backBtn" class="btn-back">Back to Prediction</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="{{ asset('assets/admin/js/recommender.js') }}"></script>
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
@endsection
