<ul class="console" style="transform: scale(1, 1); display: block;list-style: none">
   <div class="pull-right reset" data-toggle="tooltip" title="Replay"
      style=" ">
      <img style="cursor:pointer;" class="w3-hover-opacity" 
         src="{{ URL::to('/') }}/images/repeat.png"  height="20px;" alt="">
   </div>
   <li><span class="user">[Console]~</span> Was ist IT4KIDS?<span
      class="initRobot"></span></li>
   <li><span>[Console]~</span> <span class="main_text"></span><span id="typed-cursor"></span></li>
</ul>

<style>
   @media (max-width: 991px){
   .console {  
      min-height:200px !important;
   }}
   /* Console*/
   .console {
   counter-reset: line;
   width: 100%;
   height: auto;
   min-height: 134px;
   max-height: 134px;
   overflow-y: auto;
   display: none;
   background: #F5F5F5;
   color: #444;
   font-size: 15px;
   border-radius: 10px;
   -moz-border-radius: 10px;
   margin-top: 30px;
   font-family: monospace;
   padding: 25px;
   position: relative;
   }
   .console li .user {
   color: #8e8e8e;
   }
   .console li a {
   color: #444;
   }
   .console li .cursor {
   width: 5px;
   height: 16px;
   margin-left: 3px;
   vertical-align: middle;
   background: #444;
   display: inline-block;
   -webkit-animation: cursorAnim 1.5s infinite;
   -moz-animation: cursorAnim 1.5s infinite;
   -o-animation: cursorAnim 1.5s infinite;
   animation: cursorAnim 1.5s infinite;
   }
   .console li .icon {
   font-size: 14px;
   }
   .console li input {
   background: 0 0;
   outline: 0;
   border: 0;
   font-family: monospace;
   text-shadow: 0 0 0 #444;
   font-size: 15px;
   position: absolute;
   color: transparent;
   height: 30px;
   line-height: 16px;
   }
   .console li .listSite {
   background: #fff;
   padding: 8px 16px;
   border-radius: 5px;
   -moz-border-radius: 5px;
   line-height: 20px;
   margin-top: 10px;
   display: inline-block;
   word-break: keep-all;
   }
   .console li::before,.console li:before {
   content: counter(line);
   counter-increment: line;
   font-size: 14px;
   vertical-align: middle;
   display: inline-block;
   margin-right: 20px;
   color: #8e8e8e;
   }
</style>