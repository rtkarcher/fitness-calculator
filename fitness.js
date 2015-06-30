function calculate(){
    var age = parseInt($("#ageInput").val());
    var vomax = parseFloat($("#vomaxInput").val());
    
    switch($("#sexInput").val())
    {
        case "m":{
            var a = -9.266519;
            var b = -0.072175 * age;
            var c = 0.001209 * (Math.pow(age, 2));
            var d = 0.2091;
            var e = 0.001177 * age;
            var f = -0.000006232 * (Math.pow(age, 2));
        // Need to find a less redundant way to declare all variables from here down (including the HTML insert), since these are universal variables, but can't declare the variable expressions prior to declaring their requisite variables (vars. a-f)
            var p1 = a + b + c;
            var p2 = (d + e + f) * vomax;
            var x = (-1) * (p1 + p2);
            var logout = Math.exp(x);
            var ranklong = (1.0 / (1 + logout)) * 100;
            var rank = ranklong.toFixed(1);
            $("#fitnessRank").html(
                "<div class='panel panel-success'><div class='panel-heading'><h3 class='panel-title'>Your Results:</h3></div><p class='panel-body'><br />The percentile rank of your overall fitness score is <strong>" + rank +"%</strong>, compared to your peers. <br /><br />This means that for every 100 people with whom you share the above attributes, there will be approximately " + parseInt(rank) + " people who will have a fitness score that is the same as yours or lower.<br /><br /></p></div>"
                // Alternatively, we could use "Math.round(rank)" instead of "parseInt(rank)", depending on whether it would be more appropriate to round a percentile up or down...
        );};
        break;
           
        case "f":{
            var a = -9.2987421;
            var b = 0.0069102 * age;
            var c = -0.0002642 * (Math.pow(age, 2));
            var d = 0.2502;
            var e = -1 * (0.001242 * age);
            var f = 0.00004126 * (Math.pow(age, 2));
        // Need to find a less redundant way to declare all variables from here down (including the HTML insert), since these are universal variables, but can't declare the variable expressions prior to declaring their requisite variables (vars. a-f)
            var p1 = a + b + c;
            var p2 = (d + e + f) * vomax;
            var x = (-1) * (p1 + p2);
            var logout = Math.exp(x);
            var ranklong = (1.0 / (1 + logout)) * 100;
            var rank = ranklong.toFixed(1);
            $("#fitnessRank").html(
                "<div class='panel panel-success'><div class='panel-heading'><h3 class='panel-title'>Your Results:</h3></div><p class='panel-body'><br />The percentile rank of your overall fitness score is <strong>" + rank +"%</strong>, compared to your peers. <br /><br />This means that for every 100 people with whom you share the above attributes, there will be approximately " + parseInt(rank) + " people who will have a fitness score that is the same as yours or lower.<br /><br /></p></div>"
                // Alternatively, we could use "Math.round(rank)" instead of "parseInt(rank)", depending on whether it would be more appropriate to round a percentile up or down...
        );};
        break;
    };
};