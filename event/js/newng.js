angular.module('eventApp',['ngSanitize','ngAnimate'])
	.controller('demoCtrl',['$scope',function($scope){

		firebase.database().ref('/Events').once('value',function(snap){
			$scope.flag=false
			$scope.$apply(function(){
				//branch,about,coordinators array,detail,name,prize array,rules array,
				var zz=snap.val()
				var e=[];
				var BRANCHNAME = branchname.toUpperCase();
				for(var i in zz){
					console.log(zz[i].branch);

				}

				for(var i in zz){
					
					if(zz[i].branch==branchname || zz[i].branch == BRANCHNAME){
						e.push(zz[i]);
						
					}
				}
				console.log(e);
				for(var i in e){
					var prizes = e[i].prize;
					for(key in prizes){
						if(prizes[key]==0) delete prizes[key];
					}
				}
				for(var i in e){
				    var prizes = e[i].prize
					for(var j in prizes){
						var prizemoney= prizes[j];
						if(prizemoney==0){
							delete prizemoney;
						}
						for(var prop in prizemoney){
							if(prizemoney[prop]==0){
								delete prizemoney[prop];
							}
						}
						// if(j.first==0){
						// 	delete j.first;
						// }
						// if(j.second=='0'){
						// 	delete j.second;
						// }
						// if(j.third==0){
						// 	console.log(j.third);
						// 	delete j.third;
						// }
					}
				}
				
				// for(var i in e){
				//     var prizes = e[i].prize;
				//     for(key in prizes){
				//         if(prizes[key]==0) delete prizes[key];
				//         for(var prop in prizes[key]){
				            
				//         }
				//     }
				// }
				
				$scope.events=e;
				$scope.flag=true;
			
				$('.load-img').hide();
				$('#headline').show();
				$('.event-img').show();

			})
		})
		firebase.database().ref(`/Branches/${branchname}`).once('value',function(snap){
			
			if(snap.val()!=null){
				console.log(snap.val());
				$scope.about = snap.val().about;
				// var result = snap.val().head.map(key=>h[key]);
				var myData = Object.keys(snap.val().head).map(key => {
					return snap.val().head[key];
				})
				console.log(myData);
				$scope.heads=myData;
			}

		})
			
	}])

	.filter('removeBrackets',function(){
		return function(x){
			x=x.replace(/\(|\)/g, '').replace(/&/g,"").replace(/'/g,"").replace(/!/g,"").replace(/,/g,"").split('.').join("");
			return x;
		}
	})

	.filter('html', ['$sce', function ($sce) { 
    return function (text) {
        return $sce.trustAsHtml(text);
    	};    
	}])
	
	.filter('capitalize', function() {
        return function(input) {
          return (!!input) ? input.charAt(0).toUpperCase() + input.substr(1).toLowerCase() : '';
        }
    });
