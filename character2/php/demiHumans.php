<?php

function demiHumanBreathMod ($race)
{
    $saveMod = 0;
       
    if($race === "Dwarf")
    {
        $saveMod = 2;
    }
    else if($race === "Gnome")
    {
        $saveMod = 2;
    }
    else if($race === "Halfling")
    {
        $saveMod = 2;
    }
    
    return $saveMod;
    
}


function demiHumanPoisonMod ($race)
{
    $saveMod = 0;
       
    if($race === "Dwarf")
    {
        $saveMod = 4;
    }
    else if($race === "Gnome")
    {
        $saveMod = 4;
    }
    else if($race === "Halfling")
    {
        $saveMod = 4;
    }
    
    return $saveMod;
    
}


function demiHumanPetrifyMod ($race)
{
    $saveMod = 0;
       
    if($race === "Dwarf")
    {
        $saveMod = 4;
    }
    else if($race === "Gnome")
    {
        $saveMod = 4;
    }
    else if($race === "Halfling")
    {
        $saveMod = 4;
    }
    
    return $saveMod;
    
}



function demiHumanWandMod ($race)
{
    $saveMod = 0;
       
    if($race === "Dwarf")
    {
        $saveMod = 3;
    }
    else if($race === "Gnome")
    {
        $saveMod = 1;
    }
    else if($race === "Halfling")
    {
        $saveMod = 3;
    }
    
    return $saveMod;
    
}

function demiHumanSpellMod ($race)
{
    $saveMod = 0;
       
    if($race === "Dwarf")
    {
        $saveMod = 4;
    }
    else if($race === "Gnome")
    {
        $saveMod = 2;
    }
    else if($race === "Halfling")
    {
        $saveMod = 4;
    }
    
    return $saveMod;
    
}

/*Fighter Class*/

function levelLimit ($race, $level)
{
    $characterLevel = 0;
    
    if($race === "Dwarf")
    {
        if($level <= 9)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 9;
        }
    }
    else if($race === "Elf")
    {
        if($level <= 10)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 10;
        }
    }
    else if($race === "Gnome")
    {
        if($level <= 6)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 6;
        }
    }
    else if($race === "Halfling")
    {
        if($level <= 6)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 6;
        }
    }
    else if($race === "Half-Elf")
    {
        if($level <= 12)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 12;
        }
    }
    else if($race === "Half-Orc")
    {
        if($level <= 12)
        {
            $characterLevel = $level;
        }
        else
        {
            $characterLevel = 12;
        }
    }
    else
    {
        $characterLevel = $level;
    }
    
    
    return $characterLevel;
}



?>