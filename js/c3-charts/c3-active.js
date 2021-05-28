(function ($) {
 "use strict";
  
       getTemperature();
       getApiaryTemperature();
       getHumidity();
       getSound();
       getWeight();
       getApiaryHumidity();
       getApiarySound();
       getApiaryWeight();
            // c3.generate({
            //     bindto: '#slineChart',
            //     data:{
            //         columns: [
            //             ['data1', 30, 200, 100, 400, 150, 250],
            //             ['data2', 130, 100, 140, 200, 150, 50]
            //         ],
            //         colors:{
            //             data1: '#006DF0',
            //             data2: '#933EC5'
            //         },
            //         type: 'spline'
            //     }
            // });


            c3.generate({
                bindto: '#stocked',
                data:{
                    columns: [
                        ['data1', 30,200,100,400,150,250],
                        ['data2', 50,20,10,40,15,25]
                    ],
                    colors:{
                        data1: '#006DF0',
                        data2: '#933EC5'
                    },
                    type: 'bar',
                    groups: [
                        ['data1', 'data2']
                    ]
                }
            });

            c3.generate({
                bindto: '#gauge',
                data:{
                    columns: [
                        ['data', 91.4]
                    ],

                    type: 'gauge'
                },
                color:{
                    pattern: ['#006DF0', '#933EC5']

                }
            });

            c3.generate({
                bindto: '#pie',
                data:{
                    columns: [
                        ['data1', 30],
                        ['data2', 120]
                    ],
                    colors:{
                        data1: '#006DF0',
                        data2: '#933EC5'
                    },
                    type : 'pie'
                }
            });



})(jQuery); 
function getHumidity() {
    // body...
    setTimeout('getHumidity()',1000);
      let dataString = 'avghum=avghum' ;

      $.ajax({

      type: "POST",

      url: "buildgraph.php",

      data: dataString,

      cache: false,

      success: function(result){
            let r=result.split(",");
            let s=['Humidity']
            let all=s.concat(r);
            c3.generate({
                bindto: '#lineCharts',
                data:{
                    columns: [
                        all
                           //['Humidity', 35,20,22,17,25,18,17,25,18,30,25,18,17,15,18,17,10,18]
                    ],
                    colors:{
                        Humidity: '#933EC5'
                    },
                type:'spline'
                }
            });
                  }

      });

}
function getTemperature(){
    // body...
    //alert("hello");
    setTimeout('getTemperature()',1000);
        $(function(){

        $.post("buildgraph.php",
        {
          avgtemp: 'avgtemp'
        },
        function(data,status){
            let r=data.split(",");
            let s=['Temparature']
            let all=s.concat(r);
            c3.generate({
                bindto: '#lineChart',
                data:{
                    columns: [
                    all
                     //['Temparature', 35,33,38,36,35,37,37,39,40,33,35,34,34,38,36,32,30,35]
                    ],
                    colors:{
                        Temparature: '#933EC5'
                    },
                    type: 'spline'
                }
            });}
            )
    });
}
function getApiaryTemperature(){
    // body...
    //alert("hello");
    setTimeout('getApiaryTemperature()',1000);
        $(function(){

        $.post("buildgraph.php",
        {
          avgtempall:'avgtempall'
        },
        function(data,status){
            let r=data.split(",");
            let s=['Temparature']
            let all=s.concat(r);
            c3.generate({
                bindto: '#lineChartall',
                data:{
                    columns: [
                    all
                     //['Temparature', 35,33,38,36,35,37,37,39,40,33,35,34,34,38,36,32,30,35]
                    ],
                    colors:{
                        Temparature: '#933EC5'
                    },
                    type: 'spline'
                }
            });}
            )
    });
}

function getWeight(){
   setTimeout('getWeight()',1000);
         $(function(){

        $.post("buildgraph.php",
        {
          avgwght: 'avgwght'
        },
        function(data,status){
              let r=data.split(",");
              let s=['Weight']
              let all=s.concat(r);
                 c3.generate({
                bindto: '#scatter',
                data:{
                    columns: [all],
                    colors:{
                        //data1: '#006DF0',
                        Weight: '#933EC5'
                    },
                    type: 'spline'
                }
            });



        }
            )
    });

}
function getSound(){
    // body...
    //alert("hello");
   setTimeout('getSound()',1000);
        $(function(){

        $.post("buildgraph.php",
        {
          avgsound: 'avgsound'
        },
        function(data,status){
            let r=data.split(",");
            let s=['Sound']
            let all=s.concat(r);
            c3.generate({
                bindto: '#slineChart',
                data:{
                    columns: [all],
                    colors:{
                        Sound: '#933EC5'
                    },
                    type: 'spline'
                }
            });}
            )
    });
}
function getApiaryHumidity(){
    // body...
    //alert("hello");
    setTimeout('getApiaryHumidity()',1000);
        $(function(){

        $.post("buildgraph.php",
        {
          avghumall:'avgtempall'
        },
        function(data,status){
            let r=data.split(",");
            let s=['Humidity']
            let all=s.concat(r);
            c3.generate({
                bindto: '#lineChartsall',
                data:{
                    columns: [
                    all
                     //['Temparature', 35,33,38,36,35,37,37,39,40,33,35,34,34,38,36,32,30,35]
                    ],
                    colors:{
                        Humidity: '#933EC5'
                    },
                    type: 'spline'
                }
            });}
            )
    });
}
function getApiarySound(){
    // body...
    //alert("hello");
    setTimeout('getApiarySound()',1000);
        $(function(){

        $.post("buildgraph.php",
        {
          avgsoundall:'avgtempall'
        },
        function(data,status){
            let r=data.split(",");
            let s=['Sound']
            let all=s.concat(r);
            c3.generate({
                bindto: '#slineChartall',
                data:{
                    columns: [
                    all
                     //['Temparature', 35,33,38,36,35,37,37,39,40,33,35,34,34,38,36,32,30,35]
                    ],
                    colors:{
                        Sound: '#933EC5'
                    },
                    type: 'spline'
                }
            });}
            )
    });
}function getApiaryWeight(){
    // body...
    //alert("hello");
    setTimeout('getApiaryWeight()',1000);
        $(function(){

        $.post("buildgraph.php",
        {
          avgwghtall:'avgtempall'
        },
        function(data,status){
            let r=data.split(",");
            let s=['Weight']
            let all=s.concat(r);
            c3.generate({
                bindto: '#scatterall',
                data:{
                    columns: [
                    all
                     //['Temparature', 35,33,38,36,35,37,37,39,40,33,35,34,34,38,36,32,30,35]
                    ],
                    colors:{
                        Weight: '#933EC5'
                    },
                    type: 'spline'
                }
            });}
            )
    });
}