<div id="categorymenu">
      <nav class   ="subnav">
           <ul class    ="nav-pills categorymenu">
                <li><a href  ="{{ url('/')}}">Trang chu</a>
                     <?php 
                           $menu_level_1= DB::table('categories') ->where('parent_id',0) ->get();
                      ?>
                      @foreach($menu_level_1 as $item_level_1)
                           <li><a   href="{!!  URL('loai-san-pham',[$item_level_1 ->id,$item_level_1 ->alias])  !!}">{!!  $item_level_1->name !!}</a>
                      <div>
                           <ul>
                                <?php 
                                      $menu_level_2 = DB::table('categories') ->where('parent_id', $item_level_1 ->id) ->get();
                                 ?>
                                @foreach($menu_level_2 as $item_level_2)
                                     <li><a href  ="{!!  URL('loai-san-pham',[$item_level_2 ->id,$item_level_2 ->alias])  !!}">{!!  $item_level_2 ->name !!}</a></li>
                                @endforeach
                           </ul>
                      </div>
                          </li>
                  @endforeach
           <li><a href  ="lien-he">Contact</a></li>                           
           </ul>
      </nav>
</div>