<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Goutte\Client;

class HomeController extends AbstractController
{
    public $str1 = "J..s..r..q.....u..m..x..s..e..c..m..s..e..o..,..a........v..s..'..s..e..u.....t..e..o..i..n..a..t..a..n..d..v..s..o..i.....e..u..i..r..e..f..i.....l..s..t..a..o..!..l..n..s..u..e..l..t..C..u..q.....m..i..a........v..l...........n..s.....b.....é..n..e..u..m.....r........r..n..s..n..p..i..n..e..o.....j..d..p..u..u..n..s..p..m..t..o..r..d..s..a..o..e..M..p..v.....t.....m..f..l.....j..n..s..i..g..e..c..q.....s..b..c.....r.....i..n..f..t..u..r..J..n..p..x..n..i.....u..i.....e..'.....s..e..r..v..,..a........i..p..s..d..q.....s..o..e..s..u..i..s..u..d..a..e........i..n..r..e..e..e..n..s..t..u..c..m..d.....e..e..a.....r..u.....r..i..m..t..u..i.....n..a..i..s..u..n..r..T..r........p..s..o..i........m..,..a.....u..p..s..n........p..d..s..n..n.....r.....u........u..a..r..s..s..a..e.....t.....p..i..c..e..c..d..a..e..'..t..l.....f..r.....u..s..l..o..e..m..i..r.....t..u..r..t..a..e..m..f..l.....u..ê..e..o..r..-..u..m..i..r..g..e..n.....m..s..j..p..s..q..i..e.....j..t..p..a.....u..m.....e..o..e..m........i..a..M..o.....I..s..u...........u..e..l..u..a..t..t..e..u..j..s..s..N..f..t.....n..a..e.....r..n...P..f..s..r..o..c..f..";

    public $str2 = "..e..è.....e..o.....e..u..r........s..g..c..é..m..s..e..e..i..m..s..r.....e..o..l..c..f..e..i..i.....a........u..c..f..r..n..a..s..g..v..a..a..e..I.....n..p..t..t..I.....u..s..v..l..n.....l.....i..o..e..l..t..e..é..i..e..t..e..e.....n..m..e..'..e..r..s.....i..T..p..e..e..o..e..i..x..r..e..é.....t..é.....s..r..o..o.....m..e..n..s..b.....n..l..f..i........u..e..e...........l...........o.....a..n........e..e..a..e..s..t..s..u..o.....i..s..i...........u..e..d..e..l.....i..J..n..i..a..d..p..u..s..m..s..e..u.....r..a.....e..e..f..c.....c..a..e..q.....p..s..t..e..o.....t.....t..d..e.....n..a.....m..n..s..J..n..s..s..a..q..l..o..a.....s..q.....s..o.....r..é..s.....t.....r..,..i..e..i..c..b..n..e..e..s..m..s..e.....i..a..e..e..é..n.....i..i..e..a..i..o.....l..a.....i.....n..t..d.....o..e..x..r..n...........m..n..n..s..p..s.....i..,..o.....u..p..v.....a..e..à..e..o..e..e..s..v........l.....e..-..r..p..r..z..o.....a..e..é..l..e..,..ê...........n.....'.....t..é.....o..t..d..o.....i..R..r..v..-..i..e..o........n..r..'..n..o..h..t..e..o.....p..q..r.....u..c..q........i........i..s..o..i..c..à..e..o..e...o..s..u..V..e..a...";

    public $str3 = ".'..p..e..u..v..s..'..c..e..z..e..e..a.....d.....i..j..d..a.....a..u..r..n..t..a.....n..d..t..l..é..v..t..e..o.....n..e..u.....s.....a.....f..r.....s..o.....r..u.....s..o.....r..i..e.....e..i..u..s..m..l..i..s..r..e..l..e..j..s..s..o..o..r..s..t..d.....r..o.....o..d..p..s..n.....e..é..m..t..s..n..d..à..i..a........t..i..l..e.....m..é..a........l.....a..a..r..B..h.....a..i..e.....e..'..e..m..i..r..e..u..c.....j..t..ê..e..l.....t..a.....b.....e..e..e........r..p..s..c........a..p........e..e.....i..j..s..s..e..u..é..u..d.....r..s..é..l..r.....i..é..s..n..d..l..n..o..e..n..n..m..t..o.....x..o..a..e...........i..p.....e..p..t..l..y..i..e..l..s..t..r..v.....r..o..e..e..e..n..d..u.....m..e..d..t..p.....i..l..r..u..s..c..s..r..a..,..'..s..u..p..m..n..s..I..f..t..g..,..a.....r..r..V..r..e..é..e..e..n..e..o..i.....e.....u..à..a..e..v..s..e.....u..z..'..d.....r..r..v........u..r..a..i..e..P..t..t.....u..e..v..s..'..d.....a..m..t..m..e..i..e..e..e..u..l..s..d..à..r.....r..p..r..o.....t..u..z..o..c..s..r..u..a..i..d..n..m..t..e..j..v..s..x..i..e..i..o........e..e..a.....e..a..e..c..f..n.....p..s..n...r..e..e.....l..r..t";

    #[Route('/', name: 'index')]
    public function index(): Response
    {
        return $this->render('home/index.html.twig');
    }

    #[Route('/ch1', name: 'ch1')]
    public function ch1(): Response
    {
        $msg = "";
        $max = max(mb_strlen($this->str1), mb_strlen($this->str2), mb_strlen($this->str3));

        for ($i=0; $i < $max; $i++) {
            $msg .= mb_substr($this->str1, $i, 1, "UTF-8") != "." ? mb_substr($this->str1, $i, 1, "UTF-8") : "";
            $msg .= mb_substr($this->str2, $i, 1, "UTF-8") != "." ? mb_substr($this->str2, $i, 1, "UTF-8") : "";
            $msg .= mb_substr($this->str3, $i, 1, "UTF-8") != "." ? mb_substr($this->str3, $i, 1, "UTF-8") : "";
        }

        return $this->render('home/ch1.html.twig', [
            'msg' => $msg,
        ]);
    }

    #[Route('/ch2', name: 'ch2')]
    public function ch2(): Response
    {
        return new Response(chr(75).chr(78).chr(79).chr(67).chr(75));
    }


    #[Route('/ch34', name: 'ch34')]
    public function ch34(): Response
    {
        $chunks = [
            "5e2e1449bc574",
            "5e2e1449b61db",
            "5e2e1449bc13b",
            "5e2e1449b767e",
            "5e2e1449b7764",
            "5e2e1449bc23d",
            "5e2e1449b7190",
            "5e2e1449bd080",
            "5e2e1449b62cd",
            "5e2e1449bc4ec",
            "5e2e1449bbf5d",
            "5e2e1449bcde4",
            "5e2e1449b97c9",
            "5e2e1449bc290",
            "5e2e1449ba173",
            "5e2e1449b93ec",
            "5e2e1449bce6f",
            "5e2e1449b96af",
            "5e2e1449bacfc",
            "5e2e1449bae73",
            "5e2e1449bcd18",
            "5e2e1449b8b07",
            "5e2e1449bd1df",
            "5e2e1449bc1e0",
            "5e2e1449b876c",
            "5e2e1449baf34",
            "5e2e1449b850a",
            "5e2e1449b890d",
            "5e2e1449b8bb4",
            "5e2e1449b9371",
            "5e2e1449b7c36",
            "5e2e1449ba766",
            "5e2e1449b8279",
            "5e2e1449bbf10",
            "5e2e1449b6e45",
            "5e2e1449bcf02",
            "5e2e1449baabd",
            "5e2e1449baff0",
            "5e2e1449bca27",
            "5e2e1449ba874",
            "5e2e1449bb3c0",
            "5e2e1449bd03f",
            "5e2e1449bc2fd",
            "5e2e1449ba09c",
            "5e2e1449bc6c2",
            "5e2e1449b9db2",
            "5e2e1449b7618",
            "5e2e1449bce29",
            "5e2e1449b8718",
            "5e2e1449b6402",
            "5e2e1449badab",
            "5e2e1449bcaac",
            "5e2e1449bba53",
            "5e2e1449bc808",
            "5e2e1449bc84d",
            "5e2e1449bc530",
            "5e2e1449bc18e",
            "5e2e1449bc44f",
            "5e2e1449b79d9",
            "5e2e1449b75b3",
            "5e2e1449bc5f9",
            "5e2e1449b7fb2",
            "5e2e1449b66d8",
            "5e2e1449b7a8b",
            "5e2e1449bc5b6",
            "5e2e1449bb716",
            "5e2e1449ba329",
            "5e2e1449b6920",
            "5e2e1449bc63d",
            "5e2e1449b947c",
            "5e2e1449b9267",
            "5e2e1449b5e60",
            "5e2e1449bb9dc",
            "5e2e1449b98f9",
            "5e2e1449ba9ef",
            "5e2e1449b7b69",
            "5e2e1449b8869",
            "5e2e1449b86c7",
            "5e2e1449b8812",
            "5e2e1449b83da",
            "5e2e1449b8fd5",
            "5e2e1449b91e3",
            "5e2e1449bcebc",
            "5e2e1449b9aaf",
            "5e2e1449b88bc",
            "5e2e1449b8a61",
            "5e2e1449bcbbd",
            "5e2e1449b7cd6",
            "5e2e1449bcb78",
            "5e2e1449bc892",
            "5e2e1449bc702",
            "5e2e1449bb17f",
            "5e2e1449bbfb0",
            "5e2e1449b783c",
            "5e2e1449bb77e",
            "5e2e1449b6ac2",
            "5e2e1449bcc44",
            "5e2e1449ba698",
            "5e2e1449b8ec5",
            "5e2e1449b8d6d",
            "5e2e1449b9055",
            "5e2e1449bc38f",
            "5e2e1449bcffc",
            "5e2e1449b81f7",
            "5e2e1449b7e46",
            "5e2e1449bbb33",
            "5e2e1449b8a0a",
            "5e2e1449b6f12",
            "5e2e1449bbae1",
            "5e2e1449b8cc4",
            "5e2e1449b984d",
            "5e2e1449bbec0",
            "5e2e1449b7d73",
            "5e2e1449bcb37",
            "5e2e1449bb338",
            "5e2e1449bc961",
            "5e2e1449bbe6f",
            "5e2e1449bbd7e",
            "5e2e1449b76e4",
            "5e2e1449bbbd7",
            "5e2e1449bbc28",
            "5e2e1449b9f34",
            "5e2e1449bccd2",
            "5e2e1449b9c6c",
            "5e2e1449b7bd1",
            "5e2e1449bb6ac",
            "5e2e1449b80f0",
            "5e2e1449bbe1d",
            "5e2e1449bd245",
            "5e2e1449b8579",
            "5e2e1449b6b8a",
            "5e2e1449bbdd0",
            "5e2e1449b69fd",
            "5e2e1449bcd5e",
            "5e2e1449b7aff",
            "5e2e1449bcd9f",
            "5e2e1449b8f26",
            "5e2e1449ba932",
            "5e2e1449b85ce",
            "5e2e1449b8065",
            "5e2e1449b7efc",
            "5e2e1449bc4a6",
            "5e2e1449bb0a6",
            "5e2e1449b8174",
            "5e2e1449b916a",
            "5e2e1449b9501",
            "5e2e1449b8674",
            "5e2e1449bb4e9",
            "5e2e1449b973b",
            "5e2e1449bcc89",
            "5e2e1449bb270",
            "5e2e1449b92ea",
            "5e2e1449b834e",
            "5e2e1449b6861",
            "5e2e1449bbc89",
            "5e2e1449b9625",
            "5e2e1449bbd2d",
            "5e2e1449bc9e6",
            "5e2e1449bac49",
            "5e2e1449b8ab4",
            "5e2e1449b8f7d",
            "5e2e1449bc7c3",
            "5e2e1449bd179",
            "5e2e1449bc33d",
            "5e2e1449bc0a0",
            "5e2e1449b959b",
            "5e2e1449bc9a5",
            "5e2e1449b89b3",
            "5e2e1449b99cb",
            "5e2e1449bb7e1",
            "5e2e1449bab71",
            "5e2e1449b8e6f",
            "5e2e1449bcf78",
            "5e2e1449b90e2",
            "5e2e1449b6d27",
            "5e2e1449b6554",
            "5e2e1449bc8d7",
            "5e2e1449b6c56",
            "5e2e1449bc0ed",
            "5e2e1449ba4cf",
            "5e2e1449b67aa",
            "5e2e1449b8e1a",
            "5e2e1449b8962",
            "5e2e1449b8dc5",
            "5e2e1449bbb86",
            "5e2e1449bb848",
            "5e2e1449bb933",
            "5e2e1449bb434",
            "5e2e1449b8b5b",
            "5e2e1449bb489",
            "5e2e1449b8c08",
            "5e2e1449ba5e5",
            "5e2e1449bc783",
            "5e2e1449b8471",
            "5e2e1449bb5cd",
            "5e2e1449bca68",
            "5e2e1449b9e78",
            "5e2e1449bc3cf",
            "5e2e1449b72dd",
            "5e2e1449b70bf",
            "5e2e1449bb645",
            "5e2e1449b6123",
            "5e2e1449b744e",
            "5e2e1449bc918",
            "5e2e1449bb8ab",
            "5e2e1449bd118",
            "5e2e1449bb53f",
            "5e2e1449bc001",
            "5e2e1449bc743",
            "5e2e1449bcaf2",
            "5e2e1449bc681",
            "5e2e1449ba225",
            "5e2e1449b6032",
            "5e2e1449b7917",
            "5e2e1449b9fe9",
            "5e2e1449b87bf",
            "5e2e1449b8c72",
            "5e2e1449bc04e",
            "5e2e1449b8d19",
            "5e2e1449bd0c1",
            "5e2e1449b8620",
            "5e2e1449bbcdc",
            "5e2e1449b752c",
            "5e2e1449bcfbb",
            "5e2e1449bcbfd",
        ];

        return $this->render('home/34.html.twig', [
            'chunks' => $chunks
        ]);
    }


    #[Route('/ch42', name: 'ch42')]
    public function ch42(): Response
    {
        return $this->render('home/geojson.html.twig');
    }

    #[Route('/ch53', name: 'ch53')]
    public function ch53(): Response
    {
        $phrases = [
            "Iehhajwena lneokjjean z'qja rehha ajchkqpea",
            "Qj Zeaq wq hkjc okiiaeh raqp oknpen za h'kqxhe",
            "Owqnav rkqo h'ailaydan, z'qja okixna iwcea ?",
            "Lnkpacawjp jko ykjoeajya z'ajpnan zwjo hw bkhea.",
            "Eh bkiajpa lwpeaiajp zao zaooaejo ejokjzwxhao",
            "Iajwywjp jko nweokjo z'qja bkhea ejjkiwxha",
            "Ailaydav ha ! Ykiiajp ? Hw bkniqha aop ywydaa",
            "Napnkqrav rko aolnepo ap lwnpav ha zabean !",
            "Kd ! Oknpehaca eilea mqe rw ya Zeaq pqav",
            "Hexanwjp jkpna Panna, owqrwjp h'dqiwjepa"
        ];

        $message = "";

        foreach ($phrases as $p) {
            $message .= substr($this->caesar($p, 4), 0, 1);
        }

        $message = strrev($message);

        return $this->render('home/caesar.html.twig', ["message" => $message]);
    }


    public function caesar($phrase, $shift)
    {
        $characters = str_split($phrase);

        foreach($characters as $key => $c){
            $characters[$key] = chr(ord($c) + $shift);
        }

        return implode("", $characters);
    }
}
