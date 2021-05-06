@extends('layouts.main')
@section('content')
            <div class="page-header">
                <div class="page-header__container container">
                    <div class="page-header__breadcrumb">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">
                                    <a href="index.blade.php">Home</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg>
                                </li>
                                <li class="breadcrumb-item">
                                    <a href="">Breadcrumb</a>
                                    <svg class="breadcrumb-arrow" width="6px" height="9px">
                                        <use xlink:href="images/sprite.svg#arrow-rounded-right-6x9"></use>
                                    </svg>
                                </li>
                                <li class="breadcrumb-item active" aria-current="page">Components</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="page-header__title">
                        <h1>Components</h1>
                    </div>
                </div>
            </div>
            <div class="block">
                <div class="container">
                    <div class="card">
                        <div class="card-header">
                            <h5>Alerts</h5>
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="alert alert-primary alert-lg mb-3 alert-dismissible fade show">
                                        A simple large alert with <a href="">an example link</a>. Give it a click if you like.
                                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                            <svg width="12px" height="12px">
                                                <use xlink:href="images/sprite.svg#cross-12"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="alert alert-info mb-3">A simple alert with <a href="">an example link</a>. Give it a click if you like.</div>
                                    <div class="alert alert-primary mb-3">A simple alert with <a href="">an example link</a>. Give it a click if you like.</div>
                                    <div class="alert alert-secondary mb-3 mb-md-0">A simple alert with <a href="">an example link</a>. Give it a click if you like.</div>
                                </div>
                                <div class="col-12 col-md-6">
                                    <div class="alert alert-success mb-3">A simple alert with <a href="">an example link</a>. Give it a click if you like.</div>
                                    <div class="alert alert-danger mb-3">A simple alert with <a href="">an example link</a>. Give it a click if you like.</div>
                                    <div class="alert alert-warning mb-0">A simple alert with <a href="">an example link</a>. Give it a click if you like.</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header">
                            <h5>Fields</h5>
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p><strong>Text Field</strong></p>
                                    <div class="form-group">
                                        <label>Default</label>
                                        <input type="text" class="form-control" placeholder="Placeholder">
                                    </div>
                                    <div class="form-group">
                                        <label>Readonly</label>
                                        <input type="text" class="form-control" placeholder="Placeholder" readonly>
                                    </div>
                                    <div class="form-group">
                                        <label>Disabled</label>
                                        <input type="text" class="form-control" placeholder="Placeholder" disabled>
                                    </div>
                                    <div class="form-group">
                                        <label>Success</label>
                                        <input type="text" class="form-control is-valid" placeholder="Placeholder">
                                        <div class="valid-feedback">Example invalid feedback text</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Error</label>
                                        <input type="text" class="form-control is-invalid" placeholder="Placeholder">
                                        <div class="invalid-feedback">Example invalid feedback text</div>
                                    </div>
                                    <p class="mt-5"><strong>Text Field Sizes</strong></p>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-lg" placeholder="Large">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Normal">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control form-control-sm" placeholder="Small">
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <p><strong>Select</strong></p>
                                    <div class="form-group">
                                        <label>Default</label>
                                        <select class="form-control">
                                            <option>Select value...</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Disabled</label>
                                        <select class="form-control" disabled>
                                            <option>Select value...</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label>Success</label>
                                        <select class="form-control is-valid">
                                            <option>Select value...</option>
                                        </select>
                                        <div class="valid-feedback">Example invalid feedback text</div>
                                    </div>
                                    <div class="form-group">
                                        <label>Error</label>
                                        <select class="form-control is-invalid">
                                            <option>Select value...</option>
                                        </select>
                                        <div class="invalid-feedback">Example invalid feedback text</div>
                                    </div>
                                    <p class="mt-5"><strong>Text Field Sizes</strong></p>
                                    <div class="form-group">
                                        <select class="form-control form-control-lg">
                                            <option>Large...</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control">
                                            <option>Large...</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control form-control-sm">
                                            <option>Large...</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <p><strong>Textarea</strong></p>
                                    <div class="form-group">
                                        <label>Default</label>
                                        <textarea rows="3" class="form-control" placeholder="Placeholder"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Readonly</label>
                                        <textarea rows="3" class="form-control" placeholder="Placeholder" readonly></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Disabled</label>
                                        <textarea rows="3" class="form-control" placeholder="Placeholder" disabled></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Success</label>
                                        <textarea rows="3" class="form-control is-valid" placeholder="Placeholder"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <label>Error</label>
                                        <textarea rows="3" class="form-control is-invalid" placeholder="Placeholder"></textarea>
                                    </div>
                                    <p class="mt-5"><strong>Textarea Sizes</strong></p>
                                    <div class="form-group">
                                        <textarea rows="3" class="form-control form-control-lg" placeholder="Large"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <textarea rows="3" class="form-control" placeholder="Normal"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <textarea rows="3" class="form-control form-control-sm" placeholder="Small"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header">
                            <h5>Select2</h5>
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p><strong>Disabled</strong></p>
                                    <div class="form-group">
                                        <select class="form-control form-control-select2" disabled>
                                            <option>Select a country...</option>
                                            <option>United States</option>
                                            <option>Russia</option>
                                            <option>Italy</option>
                                            <option>France</option>
                                            <option>Ukraine</option>
                                            <option>Germany</option>
                                            <option>Australia</option>
                                        </select>
                                    </div>
                                    <p class="mt-5"><strong>Sizes</strong></p>
                                    <div class="form-group">
                                        <select class="form-control form-control-lg form-control-select2">
                                            <option>Select a country...</option>
                                            <option>United States</option>
                                            <option>Russia</option>
                                            <option>Italy</option>
                                            <option>France</option>
                                            <option>Ukraine</option>
                                            <option>Germany</option>
                                            <option>Australia</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <select class="form-control form-control-select2">
                                            <option>Select a country...</option>
                                            <option>United States</option>
                                            <option>Russia</option>
                                            <option>Italy</option>
                                            <option>France</option>
                                            <option>Ukraine</option>
                                            <option>Germany</option>
                                            <option>Australia</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-0">
                                        <select class="form-control form-control-sm form-control-select2">
                                            <option>Select a country...</option>
                                            <option>United States</option>
                                            <option>Russia</option>
                                            <option>Italy</option>
                                            <option>France</option>
                                            <option>Ukraine</option>
                                            <option>Germany</option>
                                            <option>Australia</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card mt-4">
                        <div class="card-header">
                            <h5>Buttons</h5>
                        </div>
                        <div class="card-divider"></div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-4">
                                    <p><strong>Primary Buttons</strong></p>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-xl">Extra Large</button>
                                        <button class="btn btn-primary btn-xl btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-lg">Button Large</button>
                                        <button class="btn btn-primary btn-lg btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary">Button Normal</button>
                                        <button class="btn btn-primary btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-sm">Button Small</button>
                                        <button class="btn btn-primary btn-sm btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-xs">Extra Small</button>
                                        <button class="btn btn-primary btn-xs btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <p><strong>Loading State</strong></p>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-loading btn-xl">Extra Large</button>
                                        <button class="btn btn-primary btn-loading btn-xl btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-loading btn-lg">Button Large</button>
                                        <button class="btn btn-primary btn-loading btn-lg btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-loading">Button Normal</button>
                                        <button class="btn btn-primary btn-loading btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-loading btn-sm">Button Small</button>
                                        <button class="btn btn-primary btn-loading btn-sm btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-loading btn-xs">Extra Small</button>
                                        <button class="btn btn-primary btn-loading btn-xs btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <p><strong>Disabled State</strong></p>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-lg" disabled>Button Large</button>
                                        <button class="btn btn-primary btn-lg btn-svg-icon" disabled>
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary" disabled>Button Normal</button>
                                        <button class="btn btn-primary btn-svg-icon" disabled>
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-sm" disabled>Button Small</button>
                                        <button class="btn btn-primary btn-sm btn-svg-icon" disabled>
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-primary btn-xs" disabled>Extra Small</button>
                                        <button class="btn btn-primary btn-xs btn-svg-icon" disabled>
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <p><strong>Secondary Buttons</strong></p>
                                    <div class="form-group">
                                        <button class="btn btn-secondary btn-xl">Extra Large</button>
                                        <button class="btn btn-secondary btn-xl btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-secondary btn-lg">Button Large</button>
                                        <button class="btn btn-secondary btn-lg btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-secondary">Button Normal</button>
                                        <button class="btn btn-secondary btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-secondary btn-sm">Button Small</button>
                                        <button class="btn btn-secondary btn-sm btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-secondary btn-xs">Extra Small</button>
                                        <button class="btn btn-secondary btn-xs btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <p><strong>Loading State</strong></p>
                                    <div class="form-group">
                                        <button class="btn btn-secondary btn-loading btn-xl">Extra Large</button>
                                        <button class="btn btn-secondary btn-loading btn-xl btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-secondary btn-loading btn-lg">Button Large</button>
                                        <button class="btn btn-secondary btn-loading btn-lg btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-secondary btn-loading">Button Normal</button>
                                        <button class="btn btn-secondary btn-loading btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-secondary btn-loading btn-sm">Button Small</button>
                                        <button class="btn btn-secondary btn-loading btn-sm btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-secondary btn-loading btn-xs">Extra Small</button>
                                        <button class="btn btn-secondary btn-loading btn-xs btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <p><strong>Disabled State</strong></p>
                                    <div class="form-group">
                                        <button class="btn btn-secondary btn-lg" disabled>Button Large</button>
                                        <button class="btn btn-secondary btn-lg btn-svg-icon" disabled>
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-secondary" disabled>Button Normal</button>
                                        <button class="btn btn-secondary btn-svg-icon" disabled>
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-secondary btn-sm" disabled>Button Small</button>
                                        <button class="btn btn-secondary btn-sm btn-svg-icon" disabled>
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-secondary btn-xs" disabled>Extra Small</button>
                                        <button class="btn btn-secondary btn-xs btn-svg-icon" disabled>
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <p><strong>Light Buttons</strong></p>
                                    <div class="form-group">
                                        <button class="btn btn-light btn-xl">Extra Large</button>
                                        <button class="btn btn-light btn-xl btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-light btn-lg">Button Large</button>
                                        <button class="btn btn-light btn-lg btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-light">Button Normal</button>
                                        <button class="btn btn-light btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-light btn-sm">Button Small</button>
                                        <button class="btn btn-light btn-sm btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-light btn-xs">Extra Small</button>
                                        <button class="btn btn-light btn-xs btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <p><strong>Loading State</strong></p>
                                    <div class="form-group">
                                        <button class="btn btn-light btn-loading btn-xl">Extra Large</button>
                                        <button class="btn btn-light btn-loading btn-xl btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-light btn-loading btn-lg">Button Large</button>
                                        <button class="btn btn-light btn-loading btn-lg btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-light btn-loading">Button Normal</button>
                                        <button class="btn btn-light btn-loading btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-light btn-loading btn-sm">Button Small</button>
                                        <button class="btn btn-light btn-loading btn-sm btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-light btn-loading btn-xs">Extra Small</button>
                                        <button class="btn btn-light btn-loading btn-xs btn-svg-icon">
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <p><strong>Disabled State</strong></p>
                                    <div class="form-group">
                                        <button class="btn btn-light btn-lg" disabled>Button Large</button>
                                        <button class="btn btn-light btn-lg btn-svg-icon" disabled>
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-light" disabled>Button Normal</button>
                                        <button class="btn btn-light btn-svg-icon" disabled>
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-light btn-sm" disabled>Button Small</button>
                                        <button class="btn btn-light btn-sm btn-svg-icon" disabled>
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-light btn-xs" disabled>Extra Small</button>
                                        <button class="btn btn-light btn-xs btn-svg-icon" disabled>
                                            <svg width="16px" height="16px">
                                                <use xlink:href="images/sprite.svg#quickview-16"></use>
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- site__body / end -->
        <!-- site__footer -->
    
@endsection
