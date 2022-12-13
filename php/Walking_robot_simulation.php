<?php

/**
 * 2069. Walking Robot Simulation II
Medium
130
261
Companies
A width x height grid is on an XY-plane with the bottom-left cell at (0, 0) and the top-right cell at (width - 1, height - 1). The grid is aligned with the four cardinal directions ("North", "East", "South", and "West"). A robot is initially at cell (0, 0) facing direction "East".

The robot can be instructed to move for a specific number of steps. For each step, it does the following.

Attempts to move forward one cell in the direction it is facing.
If the cell the robot is moving to is out of bounds, the robot instead turns 90 degrees counterclockwise and retries the step.
After the robot finishes moving the number of steps required, it stops and awaits the next instruction.

Implement the Robot class:

Robot(int width, int height) Initializes the width x height grid with the robot at (0, 0) facing "East".
void step(int num) Instructs the robot to move forward num steps.
int[] getPos() Returns the current cell the robot is at, as an array of length 2, [x, y].
String getDir() Returns the current direction of the robot, "North", "East", "South", or "West".
 

Example 1:

example-1
Input
["Robot", "step", "step", "getPos", "getDir", "step", "step", "step", "getPos", "getDir"]
[[6, 3], [2], [2], [], [], [2], [1], [4], [], []]
Output
[null, null, null, [4, 0], "East", null, null, null, [1, 2], "West"]

Explanation
Robot robot = new Robot(6, 3); // Initialize the grid and the robot at (0, 0) facing East.
robot.step(2);  // It moves two steps East to (2, 0), and faces East.
robot.step(2);  // It moves two steps East to (4, 0), and faces East.
robot.getPos(); // return [4, 0]
robot.getDir(); // return "East"
robot.step(2);  // It moves one step East to (5, 0), and faces East.
                // Moving the next step East would be out of bounds, so it turns and faces North.
                // Then, it moves one step North to (5, 1), and faces North.
robot.step(1);  // It moves one step North to (5, 2), and faces North (not West).
robot.step(4);  // Moving the next step North would be out of bounds, so it turns and faces West.
                // Then, it moves four steps West to (1, 2), and faces West.
robot.getPos(); // return [1, 2]
robot.getDir(); // return "West"


 */
class Robot {
    public $height;
    public $width;
    public $current = [0,0];
    public $currenct_direction = 0;
    public $directions = ['East',"North", "West", "South"];
    /**
     * @param Integer $width
     * @param Integer $height
     */
    function __construct($width, $height) {
        $this->height = $height;
        $this->width = $width;
        $this->currenct = [0,0];
        $this->currenct_direction = 0;
    }
  
    /**
     * @param int $num
     * @return NULL
     */
    function step($num) {
        // $num = $num < 0 ? 0 - $num : $num;
        for($i = 0 ; $i < $num;$i++){
        // add 1 if current direction is in north or east
        $distance_add = 1;
        echo "Moving ".$this->directions[$this->currenct_direction]." : [x:".$this->currenct[0].", y:".$this->currenct[1]."] \n";
        // reseting to east if currenct direction is out of bound
        if ($this->currenct_direction > count($this->directions) - 1) $this->currenct_direction = 0;
        // show substract from distance if not north | east
        if($this->currenct_direction > 1) $distance_add = -1;
        // if($this->currenct_direction <= 1) $distance_add = 1;
        // if moving along the x-axis west-east plane
        if($this->currenct_direction == 0 || $this->currenct_direction == 2){
            //show move if current position on the x-axis if lesser or equal to the max distance(width) || is going toward the negative (west)
                if(($this->currenct[0] < $this->width -1) || $this->currenct_direction == 2){
                    //adding/substracting to current distance on the x-axis
                    $this->currenct[0] =$this->currenct[0] + $distance_add;
                    //should turn if it has reached the max x-axis or min-x point
                    if($this->currenct[0] >= $this->width -1 || ($this->currenct[0] == 0 && $this->currenct_direction > 1)){
                        $this->currenct_direction = $this->currenct_direction+1;
                        if ($this->currenct_direction > count($this->directions) - 1) $this->currenct_direction = 0;
                    }
                    continue;
                }
            }
            // if moving along the y-axis south-north plane
            if($this->currenct_direction == 1 || $this->currenct_direction == 3){
                if(($this->currenct[1] < $this->height -1) || $this->currenct_direction == 3){
                    $this->currenct[1] =$this->currenct[1] + $distance_add;  
                    if($this->currenct[1] >= $this->height -1 || ($this->currenct[1] == 0 && $this->currenct_direction > 1)){
                        $this->currenct_direction = $this->currenct_direction+1;
                        if ($this->currenct_direction > count($this->directions) - 1) $this->currenct_direction = 0;
                    }
                }
                continue;
            }
            
        }
        echo "Stopped Moving ".$this->directions[$this->currenct_direction]." : [x:".$this->currenct[0].", y:".$this->currenct[1]."] \n";
    }
    
    /**
     * @return Integer[]
     */
    function getPos() {
        return $this->currenct;
    }
  
    /**
     * @return String
     */
    function getDir() {
        return $this->directions[$this->currenct_direction];
    }
}

/**
 * Your Robot object will be instantiated and called as such:
 * $obj = Robot($width, $height);
 * $obj->step($num);
 * $ret_2 = $obj->getPos();
 * $ret_3 = $obj->getDir();
 */

 $robot = new Robot(14,5);
$data =  [null, $robot->step(2), $robot->step(12), $robot->getPos(), $robot->getDir(), $robot->step(2), $robot->step(1), $robot->step(4), $robot->getPos(), $robot->getDir(),$robot->step(4), $robot->getPos(), $robot->getDir(),$robot->step(4),$robot->step(4),$robot->step(-6), $robot->getPos(), $robot->getDir()];
var_dump($data);
echo "Passed Test: ", ($data == [null, null, null, [13, 1], "North", null, null, null, [9, 4], "West", null, [5,4], "West", null,null,null, [0,1],"South" ]) ? "true" : "false";