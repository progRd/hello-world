<?php

$r=5;
$s=5;
$in=0;
for($a=$r;$a>=1;$a--){
	for($b=1;$b<=$a;$b++){
		print_r('*');
	}
	print_r('<br>');	
}
for($i=1;$i<=$r;$i++){
	for($j=1;$j<=$i;$j++){		
		print_r('*');
	}
	print_r('<br>');	
}
print_r('<br>');

for($i=$s; $i>=1; $i--)
    {
        /* Print leading spaces */       

        for($j=$s; $j>$i; $j--)
        {
           print_r(" &nbsp ");        	
        }

        /* Iterate through columns to print star */
        for($k=1; $k<=$i; $k++)
        {
            print_r('*');
        }

        /* Move to next line */
        printf('<br>');
        $in=$in+1;
    }

    printf('<br>');

    for($i=1; $i<=$r; $i++)
    {
        for($j=$i; $j<=$r; $j++)
        {
            printf("*");
        }

        for($j=1; $j<=(2*$i-2); $j++)
        {
            printf(" &nbsp ");
        }

        for($j=$i; $j<=$r; $j++)
        {
            printf("*");
        }

        printf("<br>");
    }
    for($i=1; $i<=$r; $i++)
    {
        for($j=1; $j<=$i; $j++)
        {
            printf("*");
        }

        for($j=(2*$i-2); $j<=(2*$r-2); $j++)
        {
            printf(" &nbsp ");
        }

        for($j=1; $j<=$i; $j++)
        {
            printf("*");
        }

        printf("<br>");
    }

?>
<script>
	var str='Hello World';
	str=str.toLowerCase();
	var arr=str.split(" ");
	var slug=arr.join('-');
	console.log(slug);
</script>

