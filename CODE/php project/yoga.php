<?php
require("includes/common.php");

// Redirects the user to products page if he/she is logged in.
if (isset($_SESSION['email'])) {
  header('location: products.php');
}

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Welcome | Emergency Medical Help</title>
        <!-- Bootstrap Core CSS -->
         <link href="EMH.css" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

    
    </head>

    <body style="padding-top: 50px;">
        <!-------------------------------------------------------------- Header ------------------------------------------------------>

    
    <?php
        include 'includes/header.php';
        ?>
        <!-------------------------------------------------------------- Header ---------------------------------------------------------->


        <h3>15 YOGA POSES AND THEIR BENEFITS TO YOUR BODY</h3>
        <h4>1. Bridge-Yoga-Position-Bandha-Sarvangasana</h4>
        <div id="identity">
            <img src="img/Bridge-Yoga-Position-Bandha-Sarvangasana.jpg" alt="Bridge-Yoga-Position-Bandha-Sarvangasana" id="image">
            <p>The Bridge yoga pose is a great front hip joints opener, it also strengthens your spine, opens the chest, 
                and improves your spinal flexibility in addition to stimulating your thyroid. 
                This pose brings many benefits to your body, such as the relief from stress, anxiety,
                insomnia and it can help with depression.</p>
        </div>
        <div id="identity"> 
             <h4>2. Downward-Dog-Yoga-Pose-Adho-Mukha-Svanasana</h4>
            <img src="img/Downward-Dog-Yoga-Pose-Adho-Mukha-Svanasana.jpg" alt="Downward-Dog-Yoga-Pose-Adho-Mukha-Svanasana" id="image">
            <p>The Downward Dog yoga pose lengthens and decompresses the spine, stretches the hamstrings, strengthens your arms, flushes your brain with fresh oxygen and calms your mind.</p>
          
        </div>
        <div id="identity"> 
            <h4>3. Child-Pose-Yoga-pose-Balasana</h4>
            <img src="img/Child-Pose-Yoga-pose-Balasana.jpg" alt="Child-Pose-Yoga-pose-Balasana" id="image">
             <p>The Child Pose is a resting pose useful to relieve neck, back and hip strain. While in the posture you should have slow are regulated breath; extended arms; resting hips and your forehead should be touching the mat. You can always return to this pose as at it is one of the most restorative and calming pose.</p>
        </div>
         <div id="identity"> 
          <h4>4. Child-Pose-Yoga-pose-Balasana</h4>
            <img src="img/Easy-Pose-Yoga-Pose-Sukhasana.jpg" alt="Easy-Pose-Yoga-Pose-Sukhasana" id="image"> 
            <p>The Easy Pose may seem as an easy pose but it has many benefits for the body. For example, it is a hip opener, it is calming, and it eases the menstrual pain for women in addition to lowering the level of anxiety. (while doing the posture make sure your spine is streightened)</p>
         </div>
        <div id="identity"> 
            <h4>5. Warior-I-Pose-Virabhadrasana-1-Yoga-Pose</h4>
            <img src="img/Warior-I-Pose-Virabhadrasana-1-Yoga-Pose.jpg" alt="Warior-I-Pose-Virabhadrasana-1-Yoga-Pose" id="image">
            <p>The Warrior I is a great pose for those of you who have had a hectic day at work and just need to relax your body and mind. While in this pose you are strengthening your legs, your are opening your chest and shoulders, movements which we usually don’t do throughout our day, but they are necessary for a good posture and peaceful mind. The effects out of this posture are tremendous: it strengthens the muscles of your knees and feet, it stretches your shoulders and spine, and it improves your focus.</p>
        </div>
        <div id="identity"> 
            <h4>6. Warior-II-Pose-Virabhadrasana-2-Yoga-Pose</h4>
            <img src="img/Warior-II-Pose-Virabhadrasana-2-Yoga-Pose.jpg" alt="Warior-II-Pose-Virabhadrasana-2-Yoga-Pose" id="image">
            <p>The Warrior II yoga pose also strengthens your legs and arms, opens your chest and shoulders, and it contracts your abdominal organs. Your breath needs to be regulated, your focus should be on the expansion of your arms which will help you to improve your patience. Keep your self elevated rather than collapsing with your hips – don’t allow gravitation to pull you down. Stay strong.</p>
        </div>
        <div id="identity">
            <h4>7. Triangle-Yoga-Pose-Trikonasana-Pose</h4>
            <img src="img/Triangle-Yoga-Pose-Trikonasana-Pose.jpg" alt="Triangle-Yoga-Pose-Trikonasana-Pose" id="image">
            <p>The Triangle is one of those postures that brings to your body many benefits. For example, it  improves the flexibility of your spine; it helps with the alignment of your shoulders; it relieves back pain and stiffness in the neck area, but don’t forget you need to practice each posture on the left and right site – balancing your postures is very important. With the practice of this posture you will notice many improvements, but especially for your posture.</p>
        </div>
        <div id="identity">
            <h4>8. Four-Limbed-Staff-Yoga-position-Chaturanga-yoga-position</h4>
            <img src="img/Four-Limbed-Staff-Yoga-position-Chaturanga-yoga-position.jpg" alt="Four-Limbed-Staff-Yoga-position-Chaturanga-yoga-position" id="image">
            <p>The Four Limbed Staff yoga pose strengthens your arms, wrists and abdomen. It is also a good preparation pose for more challenging arm balancing poses</p>
        </div>
        <div id="identity">
           <h4>9. Chair-Yoga-Pose-Utkatasana</h4>
            <img src="img/Chair-Yoga-Pose-Utkatasana.jpg" alt="Chair-Yoga-Pose-Utkatasana" id="image"> 
            <p>The Chair yoga position tones your leg muscles, strengthens your hip reflexors, ankles, calves and back. It stretches the chest and shoulders. It reduces symptoms of flat feet and it stimulates your heart, diaphragm, and abdominal organs.</p>
        </div>
         <div id="identity">
          <h4>10. Tree-Yoga-Pose-Vrksasana</h4>
            <img src="img/Tree-Yoga-Pose-Vrksasana.jpg" alt="Tree-Yoga-Pose-Vrksasana" id="image">   
            <p>The Tree yoga pose may seems as another easy posture but it is not a resting asana. Your back should be aligned property (extended), your hips should be at one level, and since your stability depends on the distribution of your weight on your standing leg ensure you do while maintaing and improving your balance.</p>
         </div>
        <div id="identity">
           <h4>11. Boat-Yoga-Position-Navasana</h4>
            <img src="img/Boat-Yoga-Position-Navasana.jpg" alt="Boat-Yoga-Position-Navasana" id="image"> 
            <p>The Boat yoga requires for one to be stable (as a boat) which means, straight back, chin looking forward, while knees and arms are locked. This is not an easy posture. Through it you build strong abdominal and core straight.</p>
        </div>
       <div id="identity">
            <h4>12. Crow-Yoga-Pose-Bakasana</h4>
            <img src="img/Crow-Yoga-Pose-Bakasana.jpg" alt="Crow-Yoga-Pose-Bakasana" id="image"> 
            <p>The Crow yoga pose strengthens the wrists, forearms and abdomen while also stretching the hamstring. Balance is crucial for this pose.</p>
        </div>
        <div id="identity">
            <h4>13. Arm-Balance-Yoga-Pose-Pincha-Mayurasana</h4>
            <img src="img/Arm-Balance-Yoga-Pose-Pincha-Mayurasana.jpg" alt="Arm-Balance-Yoga-Pose-Pincha-Mayurasana" id="image"> 
            <p>Arm Balance – Pincha Mayurasana

The Arm Balancing yoga poses are an advanced poses. This particular one helps you with the blood flow throughout your body; it calms your mind and it strengthens your arms. If you yet cannot do it as shown, you can always use the wall for support and the benefits are the same.</p>
            
        </div>
        <div id="identity">
          <h4>14. King-Dancer-Yoga-Pose-Natarajasana</h4>
          <img src="img/King-Dancer-Yoga-Pose-Natarajasana.jpg" alt="King-Dancer-Yoga-Pose-Natarajasana" id="image">   
            <p>The King Dancer yoga pose strengthens your legs, improves balance and core strength while also stretches your shoulders and improves your focus. It is one of the most graceful asana.</p>
        </div>
        <div id="identity">
            <h4>15. Corpse-Yoga-Pose-Savasana</h4>
             <img src="img/Corpse-Yoga-Pose-Savasana.jpg" alt="Corpse-Yoga-Pose-Savasana" id="image">
             <p>The Corpse yoga pose is one of the most important postures. It is meant to rejuvenate your mind and body after practice while also allowing you to shift your attention to your inner-self. The benefits: lowering your blood pressure, calming you  and giving your body the opportunity to obsorb all of the benefits you worked out for.</p>
        </div>
    

         <!--............................................................Footer.............................................................................-->
       

<?php
        include 'includes/footer.php';
        ?>
    </body>
    </html>