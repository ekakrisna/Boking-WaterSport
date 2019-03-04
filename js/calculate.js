  function startCalc(){
    interval = setInterval("calc()",1);
  }
  function calc(){
    one = document.autoSumForm.parasailing.value;
    two = document.autoSumForm.jumlah.value;
    three = document.autoSumForm.banana.value;
    four = document.autoSumForm.jumlah1.value;
    five = document.autoSumForm.jetski.value;
    six = document.autoSumForm.jumlah2.value;
    seven = document.autoSumForm.flyfish.value;
    eight = document.autoSumForm.jumlah3.value;
    nine = document.autoSumForm.scubadiving.value;
    ten = document.autoSumForm.jumlah4.value;
    eleven = document.autoSumForm.snorkeling.value;
    twelve = document.autoSumForm.jumlah5.value;
    thirteen = document.autoSumForm.mangrove.value;
    fourteen = document.autoSumForm.jumlah6.value;
    fiveteen = document.autoSumForm.waterskiing.value;
    sixteen = document.autoSumForm.jumlah7.value;
    seventeen = document.autoSumForm.seawalker.value;
    eightheen = document.autoSumForm.jumlah8.value;
    nineteen = document.autoSumForm.flyboard.value;
    twenty = document.autoSumForm.jumlah9.value;
    twentyone = document.autoSumForm.trawling.value;
    twentytwo = document.autoSumForm.jumlah10.value;
    twentytree = document.autoSumForm.coral.value;
    twentyfour = document.autoSumForm.jumlah11.value;
    twentyfive = document.autoSumForm.spear.value;
    twentysix = document.autoSumForm.jumlah12.value;
    twentyseven = document.autoSumForm.paketa.value;
    twentyeight = document.autoSumForm.jumlah13.value;
    twentynine = document.autoSumForm.paketb.value;
    threety = document.autoSumForm.jumlah14.value;
    threetyone = document.autoSumForm.paketc.value;
    threetytwo = document.autoSumForm.jumlah15.value;
    threetytree = document.autoSumForm.donutfly.value;
    threetyfour = document.autoSumForm.jumlah16.value;
    threetyfive = document.autoSumForm.glass.value;
    threetysix = document.autoSumForm.jumlah17.value;
    threetyseven = document.autoSumForm.turtleisland.value;
    threetyeight = document.autoSumForm.jumlah18.value;
    document.autoSumForm.total.value = (one * two) + (three * four) + (five * six) + (seven * eight) + (nine * ten) + (eleven * twelve) + (thirteen * fourteen) + (fiveteen * sixteen) + (seventeen * eightheen) + (nineteen * twenty) + (twentyone * twentytwo) + (twentytree * twentyfour) + (twentyfive * twentysix) + (twentyseven * twentyeight) + (twentynine * threety) + (threetyone * threetytwo) + (threetytree * threetyfour) + (threetyfive * threetysix) + (threetyseven * threetyeight);
  }
  function stopCalc(){
    clearInterval(interval);
  }
