<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{

    public $str1 = "J..s..r..q.....u..m..x..s..e..c..m..s..e..o..,..a........v..s..'..s..e..u.....t..e..o..i..n..a..t..a..n..d..v..s..o..i.....e..u..i..r..e..f..i.....l..s..t..a..o..!..l..n..s..u..e..l..t..C..u..q.....m..i..a........v..l...........n..s.....b.....é..n..e..u..m.....r........r..n..s..n..p..i..n..e..o.....j..d..p..u..u..n..s..p..m..t..o..r..d..s..a..o..e..M..p..v.....t.....m..f..l.....j..n..s..i..g..e..c..q.....s..b..c.....r.....i..n..f..t..u..r..J..n..p..x..n..i.....u..i.....e..'.....s..e..r..v..,..a........i..p..s..d..q.....s..o..e..s..u..i..s..u..d..a..e........i..n..r..e..e..e..n..s..t..u..c..m..d.....e..e..a.....r..u.....r..i..m..t..u..i.....n..a..i..s..u..n..r..T..r........p..s..o..i........m..,..a.....u..p..s..n........p..d..s..n..n.....r.....u........u..a..r..s..s..a..e.....t.....p..i..c..e..c..d..a..e..'..t..l.....f..r.....u..s..l..o..e..m..i..r.....t..u..r..t..a..e..m..f..l.....u..ê..e..o..r..-..u..m..i..r..g..e..n.....m..s..j..p..s..q..i..e.....j..t..p..a.....u..m.....e..o..e..m........i..a..M..o.....I..s..u...........u..e..l..u..a..t..t..e..u..j..s..s..N..f..t.....n..a..e.....r..n...P..f..s..r..o..c..f..";
    
    public $str2 = "..e..è......e..o.....e..u..r........s..g..c..é..m..s..e..e..i..m..s..r.....e..o..l..c..f..e..i..i.....a........u..c..f..r..n..a..s..g..v..a..a..e..I.....n..p..t..t..I.....u..s..v..l..n.....l.....i..o..e..l..t..e..é..i..e..t..e..e.....n..m..e..'..e..r..s.....i..T..p..e..e..o..e..i..x..r..e..é.....t..é.....s..r..o..o.....m..e..n..s..b.....n..l..f..i........u..e..e...........l...........o.....a..n........e..e..a..e..s..t..s..u..o.....i..s..i...........u..e..d..e..l.....i..J..n..i..a..d..p..u..s..m..s..e..u.....r..a.....e..e..f..c.....c..a..e..q.....p..s..t..e..o.....t.....t..d..e.....n..a.....m..n..s..J..n..s..s..a..q..l..o..a.....s..q.....s..o.....r..é..s.....t.....r..,..i..e..i..c..b..n..e..e..s..m..s..e.....i..a..e..e..é..n.....i..i..e..a..i..o.....l..a.....i.....n..t..d.....o..e..x..r..n...........m..n..n..s..p..s.....i..,..o.....u..p..v.....a..e..à..e..o..e..e..s..v........l.....e..-..r..p..r..z..o.....a..e..é..l..e..,..ê...........n.....'.....t..é.....o..t..d..o.....i..R..r..v..-..i..e..o........n..r..'..n..o..h..t..e..o.....p..q..r.....u..c..q........i........i..s..o..i..c..à..e..o..e...o..s..u..V..e..a...";
    
    public $str3 = ".'..p..e...u..v..s..'..c..e..z..e..e..a.....d.....i..j..d..a.....a..u..r..n..t..a.....n..d..t..l..é..v..t..e..o.....n..e..u.....s.....a.....f..r.....s..o.....r..u.....s..o.....r..i..e.....e..i..u..s..m..l..i..s..r..e..l..e..j..s..s..o..o..r..s..t..d.....r..o.....o..d..p..s..n.....e..é..m..t..s..n..d..à..i..a........t..i..l..e.....m..é..a........l.....a..a..r..B..h.....a..i..e.....e..'..e..m..i..r..e..u..c.....j..t..ê..e..l.....t..a.....b.....e..e..e........r..p..s..c........a..p........e..e.....i..j..s..s..e..u..é..u..d.....r..s..é..l..r.....i..é..s..n..d..l..n..o..e..n..n..m..t..o.....x..o..a..e...........i..p.....e..p..t..l..y..i..e..l..s..t..r..v.....r..o..e..e..e..n..d..u.....m..e..d..t..p.....i..l..r..u..s..c..s..r..a..,..'..s..u..p..m..n..s..I..f..t..g..,..a.....r..r..V..r..e..é..e..e..n..e..o..i.....e.....u..à..a..e..v..s..e.....u..z..'..d.....r..r..v........u..r..a..i..e..P..t..t.....u..e..v..s..'..d.....a..m..t..m..e..i..e..e..e..u..l..s..d..à..r.....r..p..r..o.....t..u..z..o..c..s..r..u..a..i..d..n..m..t..e..j..v..s..x..i..e..i..o........e..e..a.....e..a..e..c..f..n.....p..s..n...r..e..e.....l..r..t.";
    
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $msg = "";
        $max = max(mb_strlen($this->str1), mb_strlen($this->str2), mb_strlen($this->str3));

        for ($i=0; $i < $max; $i++) {
            if (isset($this->str1[$i]) && $this->str1[$i] != ".") {
                $msg .= $this->str1[$i];
            }else if (isset($this->str2[$i]) && $this->str2[$i] != ".") {
                $msg .= $this->str2[$i];
            }else if (isset($this->str3[$i]) && $this->str3[$i] != ".") {
                $msg .= $this->str3[$i];
            }
        }
      

        dd($msg);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
