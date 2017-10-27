'use strict'

/*
var i,
    arr=[3,1,6,9,3,2],
      sum=0;
for(i=1; i<=arr.length; i++){
    sum+=arr[i];
if (sum>10){
    alert(i);break;
}

}
 */
/*
var i,
    arr=[3,1,6,9,3,2],
   arr1=[];

    for(i=arr.length-1; i>=0; i--){
       arr1.push(arr[i]);

}
alert(arr1);
 */

var i,
    j,
    arr=[[1, 2, 3], [4, 5], [6]],
    sum=0;

for (i=1;i<arr.lenght;i++){
   for (j=1;j<arr[i].lenght;j++){
      sum+=arr[i][j];
       alert(sum);
   }
}


