<? php
função  poligono ( $ lados , $ medida ) {
    if ( $ lados  ==  3 ) {
        $ perimetro  =  $ lados  *  $ medida ;
        $ msg  =  " TRIÂNGULO, com perímetro igual a: "   .  $ perimetro  .  " \ n " ;
        return  $ msg ;
    }
    elseif ( $ lados  ==  4 ) {
        $ area  =  $ lados  *  $ medida ;
        $ msg  =  " QUADRADO, com área igual a: "  .  $ área  .  " \ n " ;
        return  $ msg ;
    }
    mais {
        $ msg  =  " PENTÁGONO \ n " ;
        return  $ msg ;
    }
}
echo  " Há algumas partes seu polígono terá? [3, 4 ou 5] \ n " ;
$ lados  = ( int ) fgets ( STDIN );
echo  " Qual será a medida de cada lado do polígono: \ n " ;
$ medida  = ( int ) fgets ( STDIN );
$ status  = poligono ( $ lados , $ medida );
echo  $ status ;
