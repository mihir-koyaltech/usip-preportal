<div>
    <!-- @if(!empty($successMessage)) -->
    <div class="alert alert-success">
        {{ $successMessage }}
    </div>
    <!-- @endif -->

    <div class="stepwizard">
        <div class="stepwizard-row setup-panel">
            <div class="stepwizard-step">
                <a href="#step-1" type="button" class="btn btn-circle {{ $currentStep != 1 ? 'btn-default' : 'btn-primary' }}">1</a>
                <p>Phone Numbers</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-2" type="button" class="btn btn-circle {{ $currentStep != 2 ? 'btn-default' : 'btn-primary' }}">2</a>
                <p>Plans</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-3" type="button" class="btn btn-circle {{ $currentStep != 3 ? 'btn-default' : 'btn-primary' }}" disabled="disabled">3</a>
                <p>Users</p>
            </div>
            <div class="stepwizard-step">
                <a href="#step-4" type="button" class="btn btn-circle {{ $currentStep != 4 ? 'btn-default' : 'btn-primary' }}" disabled="disabled">4</a>
                <p>Users</p>
            </div>
        </div>
    </div>

    <div class="row setup-content {{ $currentStep != 1 ? 'd-none' : '' }}" id="step-1">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 1</h3>
                <div class="form-group">
                    <label for="title">Select Numbers:</label>
                    <input type="text" wire:model="numbersType" wire:change="numbersTypeChange" class="form-control" id="taskTitle">
                    @error('name') <span class="error">{{ $message }}</span> @enderror
                </div>
                Selected Numbers: {{print_r($selectedNumbers)}} <br>
                @for($i=0;$i<count($numberOptions);$i++) 
                    <button class="btn btn-primary nextBtn btn-lg pull-right" wire:click="numberClicked({{$i}})" type="button">{{$numberOptions[$i]}}</button>
                @endfor
            </div>
            <button class="btn btn-primary nextBtn btn-lg pull-right mt-4 ml-4" wire:click="numbersSelected" type="button" >Next</button>
        </div>
    </div>

    <div class="row setup-content {{ $currentStep != 2 ? 'd-none' : '' }}" id="step-2">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 2</h3>
  
                <div class="form-group">
                    <label for="description">Select Plan</label>
                    <select wire:model="plan">
                        @foreach($planOptions as $option)
                        <option value="{{$option}}">{{$option}}</option>
                        @endforeach
                    </select>
                    @error('stock') <span class="error">{{ $message }}</span> @enderror
                </div>
  
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="planSelected">Next</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(1)">Back</button>
            </div>
        </div>
    </div>

    <div class="row setup-content {{ $currentStep != 3 ? 'd-none' : '' }}" id="step-3">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 3</h3>
  
                <div class="form-group">
                    <label for="description">Select Users</label><br/>
                    <input type="number" wire:model="users" class="form-control" id="productAmount"/>
                    @error('status') <span class="error">{{ $message }}</span> @enderror
                </div>
  
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="usersSelected">Next</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(2)">Back</button>
            </div>
        </div>
    </div>

    <div class="row setup-content {{ $currentStep != 4 ? 'd-none' : '' }}" id="step-4">
        <div class="col-xs-12">
            <div class="col-md-12">
                <h3> Step 4</h3>
                {{$currentStep}} <br>
                {{$users}} <br>
                {{$plan}} <br>
                {{print_r($selectedNumbers)}} <br>
                <button class="btn btn-primary nextBtn btn-lg pull-right" type="button" wire:click="submitForm">Next</button>
                <button class="btn btn-danger nextBtn btn-lg pull-right" type="button" wire:click="back(3)">Back</button>
            </div>
        </div>
    </div>
</div>