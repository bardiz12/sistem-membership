<?php

use Illuminate\Database\Seeder;

class insertEvent extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $text = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean placerat mi ullamcorper sem imperdiet tempus. Donec dignissim elit sem, quis condimentum ipsum molestie at. Aliquam aliquam ac dolor in luctus. Nullam vitae mi sapien. Praesent ut justo gravida, molestie orci id, feugiat dui. Praesent dignissim at leo sit amet congue. Morbi sed molestie lorem.Aliquam luctus nunc lectus, et finibus felis varius id. Nulla varius, ipsum ac imperdiet elementum, augue felis imperdiet mi, at lacinia velit metus quis velit. Phasellus accumsan massa turpis, nec pharetra risus tristique eu. Nam suscipit lacus ullamcorper, porta nisl eu, viverra justo. Donec aliquet nulla nec urna commodo, ut vestibulum dui efficitur. Suspendisse scelerisque nisi nisi, eget hendrerit tortor rutrum sed. Ut velit lorem, tincidunt nec mattis a, venenatis ac nibh. Nunc nec velit sed dui convallis rutrum quis vel massa. Aliquam id turpis nec arcu vulputate mattis. Praesent eleifend urna ac nisl feugiat, at mollis lorem rhoncus. Donec orci ante, ultrices non sagittis nec, posuere et velit. Suspendisse eget libero erat. Vestibulum eu lobortis nisi, at viverra dolor. Quisque nunc ligula, sodales sit amet ipsum vel, ultricies laoreet velit. Nulla eleifend tortor vel dapibus congue. Cras tincidunt posuere eros, at congue justo iaculis ac.Suspendisse dapibus non libero id mattis. Praesent ultrices lectus quis diam laoreet pharetra. Nullam fermentum tempor ultrices. Nullam at augue tincidunt, ullamcorper massa vel, volutpat tellus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Cras luctus elit sit amet nisl euismod iaculis. Sed dictum quam molestie arcu consectetur, non auctor massa tincidunt. Morbi sit amet tristique odio. Proin vel tempus enim, a hendrerit enim. In vehicula ornare scelerisque. Duis vitae tellus fringilla, efficitur justo non, pellentesque metus. Fusce eu malesuada quam, vitae egestas nibh. Duis rhoncus leo nec dapibus pharetra. Cras at viverra lacus.Nullam vitae egestas elit, nec tincidunt neque. Sed elementum orci neque, vel mollis magna rhoncus et. Fusce cursus elit et dui mollis, a malesuada dolor scelerisque. Ut eu sem fringilla, finibus purus non, efficitur justo. Curabitur quis nunc ligula. Nam tempus tempus dolor. Cras mollis orci in eros posuere viverra.";

        \App\Model\Event::truncate();        
        for ($i=0; $i < 30; $i++) { 
            $awal = rand(0,strlen($text)*(2/3));
            $rand_time = time() + (rand(0,3) * 86400);
            \App\Model\Event::create( [
                'nama_event'=>"Event Acara ke-".($i+1),
                'description'=>substr($text,$awal,rand(100,200)),
                'tempat_event'=>'Indonesia',
                'tanggal_mulai_event'=>date('Y-m-d',$rand_time),
                'tanggal_berakhir_event'=>date('Y-m-d',$rand_time + (rand(1,5) * 86400)),
                'created_at'=>'2018-12-28 09:39:15',
                'updated_at'=>'2018-12-28 09:39:19'
                ]);
            //exit();
            /*try{
                $event = new \App\Model\Event();
                //$event->nama_event = ;
                $event->tempat_event = "Indonesia";
                
                $event->deskripsi = substr($text,$awal,rand(100,200));
                
                
                $event->tanggal_mulai_event = date('Y-m-d',$rand_time);
                $event->tanggal_berakhit_event = date('Y-m-d',$rand_time + (rand(1,5) * 86400));
                if($event->save){
                    echo "OK\n";
                }else{
                    echo "error\n";
                }
            }catch(\Exception $e){
                print_r($e);
                exit();
            }*/
            


        }
    }
}
