<div id="settings_authfactor" class="tab-pane">
    <br><br>
    <div class="row">
       <div class="col-md-12">
           <section class="hk-sec-wrapper">
               <h5 class="hk-sec-title">Configuration AuthFactor</h5><br><br>
               <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="inputPassword5">AuthFactor UserKey</label>
                           <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" value="{{auth()->user()->user_key}}" disabled>
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="inputPassword5">PLINK KEY</label>
                           <input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" value="XML_ERTS" disabled>
                       </div>
                   </div>
               </div>
               <div class="row">
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="inputPassword5">App IP</label>
                           <input type="text" id="inputPassword5" class="form-control" placeholder="192.128.1.1.0" value="{{auth()->user()->user_key}}">
                       </div>
                   </div>
                   <div class="col-md-6">
                       <div class="form-group">
                           <label for="inputPassword5">EndPoint URL</label>
                           <input type="text" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock" value="{{url('/')}}/rosted-key/{{auth()->user()->user_key}}.json">
                       </div>
                   </div>
               </div>
               <button type="submit" class="btn btn-primary">Save Settings</button>
           </section>
       </div>

    </div>
</div>