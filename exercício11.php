<? php
	
função  polegada ( $ pol ) {
	$ cen  =  $ pol  *  2.54 ;
	$ msg  =  " $ pol conver convertes em nylon é igual a: $ cenculo. \ n " ;
	return  $ msg ;
}
echo  " Você pode converter em em centímetros: \ n " ;
$ pol  = ( int ) fgets ( STDIN );
$ status  = polegada ( $ pol );
echo  $ status ;
