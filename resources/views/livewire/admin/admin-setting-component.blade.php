<div>
    <div class="container" style="padding: 30px 0">
        <style>
            nav svg {
                height: 20px;
            }

            nav.hidden {
                display: block !important;
            }
        </style>
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Settings</div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                            <div class="alert alert-success" role="alert">{{Session::get('message')}}</div>
                        @endif
                        <form class="form-horizontal" wire:submit.prevent="saveSettings">
                            <div class="form-group">
                                <label for="email" class="col-md-4 control-label">Email</label>
                                <div class="col-md-4">
                                    <input placeholder="Email" type="email" name="email" id=""
                                        class="form-control input-md" wire:model="email">
                                        @error('email')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="col-md-4 control-label">Phone</label>
                                <div class="col-md-4">
                                    <input placeholder="Phone" type="text" name="phone" id=""
                                        class="form-control input-md" wire:model="phone">
                                        @error('phone')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="phone2" class="col-md-4 control-label">Phone2</label>
                                <div class="col-md-4">
                                    <input placeholder="Phone2" type="text" name="phone" id=""
                                        class="form-control input-md" wire:model="phone2">
                                        @error('phone2')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="address" class="col-md-4 control-label">Address</label>
                                <div class="col-md-4">
                                    <input placeholder="Address" type="text" name="address" id=""
                                        class="form-control input-md" wire:model="address">
                                        @error('address')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="map" class="col-md-4 control-label">Map</label>
                                <div class="col-md-4">
                                    <input placeholder="Map" type="text" name="map" id=""
                                        class="form-control input-md" wire:model="map">
                                        @error('map')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="twitter" class="col-md-4 control-label">Twitter</label>
                                <div class="col-md-4">
                                    <input placeholder="Twitter" type="text" name="twitter" id=""
                                        class="form-control input-md" wire:model="twitter">
                                        @error('twitter')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="facebook" class="col-md-4 control-label">Facebook</label>
                                <div class="col-md-4">
                                    <input placeholder="Facebook" type="text" name="facebook" id=""
                                        class="form-control input-md" wire:model="facebook">
                                        @error('facebook')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="pinterest" class="col-md-4 control-label">Pinterest</label>
                                <div class="col-md-4">
                                    <input placeholder="Pinterest" type="text" name="pinterest" id=""
                                        class="form-control input-md" wire:model="pinterest">
                                        @error('pinterest')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="instagram" class="col-md-4 control-label">Instagram</label>
                                <div class="col-md-4">
                                    <input placeholder="Instagram" type="text" name="instagram" id=""
                                        class="form-control input-md" wire:model="instagram">
                                        @error('instagram')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="youtube" class="col-md-4 control-label">Youtube</label>
                                <div class="col-md-4">
                                    <input placeholder="Youtube" type="text" name="youtube" id=""
                                        class="form-control input-md" wire:model="youtube">
                                        @error('youtube')
                                            <p class="text-danger">{{$message}}</p>
                                        @enderror
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="submit" class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-primary">Save</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!--end row-->
    </div>
    <!--end container-->
</div>
