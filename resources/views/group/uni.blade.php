    @foreach($roles as $role)
                        <div class="" style="text-align: center;">
                            <!--<input type="checkbox" class="form-check-input" name="roles[]" value="{{ $role->id}}" id="$role->id" @foreach($user->roles as $userRole) @if($userRole->id == $role->id) checked @endif @endforeach>-->
                            <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" name="roles[]" value="{{ $role->id}}" id="$role->id" @if ($user->roles->pluck('id')->contains($role->id)) checked @endif >

                            <label for="{{ $role->id }}" class="form-check-label">{{ $role->name }}</label><br>
                            </div>
                    @endforeach