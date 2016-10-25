'use strict';
angular.module('todoListApp')
 .controller('mainCtrl', function($scope, dataService) {
 	$scope.helloConsole = dataService.helloConsole;

 	$scope.addTodo = function() {
		var todo = {"name": "This is a new todo."}
		$scope.todos.unshift(todo);
 	};

 	dataService.getTodos(function(response){
 		console.log(response.data);
 		$scope.todos = response.data;
 	});

 	$scope.deleteTodos = function(todo, $index){
 		dataService.deleteTodos(todo);
 		$scope.todos.splice($index, 1);
 	};

 	$scope.saveTodos = function(todos){
 		var filteredTodos = $scope.todos.filter(function(todo) {
 			if(todo.edited){
 				return todo;
 			};

 		});

    dataService.saveTodos(filteredTodos);


 	};


 });
