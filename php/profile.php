<?php include '../includes/head.php'; ?>
<title>Profile</title>
</head>

<body class="b2">
<div id="stuff">
<div id="container">
<?php include '../includes/nav.php'; ?>
    <?php include '../includes/aside.php'; ?>
    <div id="content">
    
    <div class="pa1">
    <h2>One of my project in high school</h2>
    <img src="../images/hi.jpg" alt="project"  class="images"/>
    </div>
    <div class="pa2">
    <h2 class="javah">Java I wrote</h2>
    <a href="../downloads/killerbug.txt" download class="code">Code</a>
    <p><pre class="java"> 
    //correy winke

package actor;



import info.gridworld.grid.Grid;

import info.gridworld.grid.Location;



import java.awt.Color;

import java.util.*;



public class killerbug extends Bug

{

    private int myeat;

    private int myyears;

    private int myend;

    private static final double LFACTOR = 5;



    public killerbug()

    {

        setColor(Color.GREEN);

         myeat=0;

         myyears=0;

         myend=0;

     }



    public killerbug(Color bugColor)

    {

         myeat=0;

         myyears=0;

         myend=0;

        setColor(bugColor);

    }



    public void act()

    {

          ArrayList<Location>spots= new ArrayList<Location>();

          Grid gr= getGrid();

          Location loc=getLocation();

          int d = getDirection();

          int thing=d;

          Location yes=loc.getAdjacentLocation(thing);

            if(myeat>1)

            {

                 Color c = getColor();

                 int red = (int) (c.getRed() + (1+LFACTOR));

                 int green = (int) (c.getGreen() + (1+LFACTOR));

                 int blue = (int) (c.getBlue() + (1+LFACTOR));

                 setColor(new Color(red, green, blue)); 

            }

   

        if (killermove())

        {

          if(gr.isValid(yes)==true)

                {

                if((gr.get(yes) instanceof Actor))

                {

                   myeat++; 

                }

            }

            if(myeat==1)

            {

                setColor(Color.BLACK);

            }

          if(gr.isValid(yes)==true)

          {

           if(gr.get(yes) ==null)

           {

                 myend++;   

           }

           else

           {

                 if(myeat>0)

                 {

                    myend=0; 

                 }

           }

          }

          if(myeat>1)

          {

           myyears++;

          }

          move();

            if(myeat==15)

            {

                myeat=0;

            }  

        }

        else

        {

            turn();

            myend++;           

        }

        

        if(myyears==15)

        {

          gkillerbug fred= new gkillerbug();

          removeSelfFromGrid();

          fred.putSelfInGrid(gr,loc);

        }

                    if(myend==15)

            {

              removeSelfFromGrid();

              myend=0;

            }

    }

        public boolean killermove()

    {

        Grid<Actor> gr = getGrid();

        if (gr == null)

            return false;

        Location loc = getLocation();

        Location next = loc.getAdjacentLocation(getDirection());

        if (!gr.isValid(next))

            return false;

        Actor neighbor = gr.get(next);

       return (neighbor == null) || (neighbor instanceof Actor);

    }

}
    </pre></p>
    </div>
    <div class="pa3">
    <h2 class="adobe">Adobe tools final project</h2>
    <video src="../videos/final.mp4" controls type="video/mp4">
    </video>
    </div>
    <div class="pa4">
    <table>
            	<th>Academics</th>
                	<tr>
                    	<td>Parker High School</td>
                        <td>2014</td>
                        <td>Honors</td>
                    </tr>
                    <tr>
                    	<td>Minneapolis Media Institute</td>
                        <td>2015</td>
                        <td>Honors First Semster</td>
                    </tr>
            </table>
  
    </div>
  </div>
    </div>
<?php include '../includes/footer.php'; ?> 
  