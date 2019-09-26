# UngAalborg SmokeCoop

This is a basic website built with PHP + SQL in order to train utilities in CS:GO. Also it is a way for the players to find smokes.



## Brainstorm

### Website structure / design

I wish to have a simple website in which you can choose a map and have all results shown that are associated with the map. Then you can sort which type of utility you wish to have shown. These are created as cards and upon clicking on them a **hover-panel** is shown in which the .gif is shown. On this panel additional information can also be found.

Maybe use this: http://krasimir.github.io/gifffer/

**Practice part** - Not yet decided.



### Database structure

The first implementation will be simple and easy to work with. The idea is to have users be able to submit utilities. So these link to a user but also a map, because the utility is based on specific maps. The diagram can be found [here.](https://dbdiagram.io/d/5d8caec6ff5115114db4a7af)

![database diagram](images/database-structure.png "Database diagram")

