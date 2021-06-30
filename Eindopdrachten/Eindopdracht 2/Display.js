console.log(card_array);

var src = document.getElementById("table");
for (i=0 ;i<card_array;i++){
    document.getElementById("table").innerHTML = '<img id="my_image" src="/images/'+card_array[i],'" />';
}
