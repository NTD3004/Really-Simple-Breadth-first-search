<?php

class BFS {
	protected $graph = array();
	protected $visited = array();
	protected $queue = array();

	public function __construct($graph) {
		$this->graph = $graph;
		$this->initializeVisited();
	}

	protected function initializeVisited() {
		foreach ($this->graph as $key => $vertex) {
	        $this->visited[$key] = 0;
	    }
	}

	protected function initializeQueue($start) {
		// initially enqueue only the starting vertex
		array_push($this->queue, $start);
    	$this->visited[$start] = 1;
	}

	public function breadthFirst($start) {
		$this->initializeQueue($start);

		while (count($this->queue)) {
	        $t = array_shift($this->queue);

	        foreach ($this->graph[$t] as $key => $vertex) {
	            if (!$this->visited[$key] && $vertex == 1) {
	                $this->visited[$key] = 1;
	                array_push($this->queue, $key);
	                echo $key . "\t";
	            }
	        }
	        echo "\n";
	    }
	}
}
