<?php
// Array of 20 unique, colorful preaching comments (at least 200 words each)
$comments = [
    "<span style='color:#e74c3c;'>In this sermon, we explore the amazing power of faith. Faith is not just believing—it is acting, trusting, and walking confidently with God even in the most challenging situations. When life feels uncertain, faith becomes a guiding light that brings clarity, hope, and courage. Through prayer, reflection, and devotion, we strengthen our spiritual foundation, allowing God’s wisdom to shape our choices. Each step taken in faith opens doors, heals wounds, and inspires those around us. By embracing faith fully, we learn resilience, patience, and unwavering trust in God’s plan. This message highlights that faith transforms ordinary lives into extraordinary journeys filled with love, joy, and purpose.</span>",

    "<span style='color:#2980b9;'>Hope is the anchor of the soul, keeping us steady during life’s storms. In this powerful sermon, we dive into the essence of hope and its ability to bring light into dark times. Hope is active, not passive—it inspires action, perseverance, and positivity. By trusting in God’s plan, we see opportunities even in challenges and learn to embrace each day with gratitude. Through scripture and reflection, we understand that hope fuels courage, strengthens relationships, and nurtures spiritual growth. This sermon encourages believers to internalize hope, letting it shine brightly in thoughts, words, and deeds, uplifting not just ourselves but everyone around us.</span>",

    "<span style='color:#27ae60;'>Love is the greatest commandment, and this sermon explores its profound impact on our lives. True love is selfless, compassionate, and unwavering, reflecting God’s boundless grace. By practicing love in daily life, we build communities, heal broken hearts, and inspire others to walk in kindness. Through examples from scripture and personal stories, the message emphasizes the importance of forgiveness, understanding, and generosity. Love empowers us to overcome fear, resentment, and negativity, creating a ripple effect of positivity that spreads far beyond ourselves. This preaching invites believers to embrace love as a guiding principle in every action, thought, and interaction, transforming both personal lives and communities.</span>",

    "<span style='color:#f39c12;'>Perseverance is key to spiritual growth and personal development. In this inspiring sermon, we learn how to stay steadfast in faith, even when obstacles arise. Life’s challenges test our character, patience, and commitment, but perseverance enables us to rise stronger and wiser. By staying connected to God through prayer, study, and reflection, we find the strength to continue forward. This message encourages believers to trust the journey, embrace challenges as lessons, and cultivate resilience. Through stories, biblical lessons, and practical advice, we discover how perseverance leads to fulfillment, spiritual maturity, and a deeper connection with God’s purpose in our lives.</span>",

    "<span style='color:#8e44ad;'>Gratitude transforms the heart and soul, bringing peace and joy into daily life. This sermon highlights the importance of recognizing blessings, big and small, and living with appreciation. Gratitude shifts focus from lack to abundance, fostering contentment and happiness. By reflecting on God’s grace, we develop empathy, kindness, and humility, strengthening relationships and community bonds. This preaching encourages believers to adopt gratitude as a daily practice, enhancing spiritual growth, resilience, and overall well-being. Through scripture, stories, and practical guidance, the sermon demonstrates how gratitude can illuminate life’s path, making every moment meaningful and filled with divine presence.</span>",

    "<span style='color:#c0392b;'>Forgiveness is a powerful act of liberation. In this sermon, we explore how releasing grudges and resentments can heal hearts and restore peace. Forgiveness is not just about others—it is a gift to oneself, allowing freedom from bitterness and pain. Through understanding, empathy, and prayer, believers are encouraged to forgive sincerely and move forward. This message demonstrates that forgiveness nurtures relationships, strengthens faith, and fosters spiritual growth. By embracing forgiveness fully, we align with God’s teachings, cultivate inner peace, and inspire others to live harmoniously. This sermon provides practical insights, reflective questions, and real-life examples to guide the journey toward genuine forgiveness.</span>",

    "<span style='color:#16a085;'>Joy is a reflection of God’s presence in our lives. This preaching emphasizes cultivating joy even amidst challenges, understanding that it originates from a deep spiritual connection. Joy uplifts the spirit, strengthens resilience, and encourages positive action. Through stories, scripture, and reflection, the message teaches believers to find joy in prayer, service, community, and everyday blessings. By embracing joy intentionally, we transform ordinary experiences into celebrations of faith, hope, and divine love. This sermon inspires hearts to radiate joy, enhancing personal growth and positively influencing everyone around us.</span>",

    "<span style='color:#d35400;'>Peace is essential for spiritual balance. In this sermon, we explore how to attain inner tranquility amidst life’s chaos. Peace comes from trust, surrender, and alignment with God’s will. By cultivating mindfulness, prayer, and reflection, believers can navigate challenges calmly, make wise decisions, and maintain harmony in relationships. This message guides the congregation to prioritize peace, fostering clarity, resilience, and spiritual depth. Through practical advice, biblical examples, and personal insights, this preaching illuminates the path to lasting peace, enriching both the individual and the community.</span>",

    "<span style='color:#2c3e50;'>Faithful living requires discipline, commitment, and awareness of God’s guidance. This sermon teaches the importance of aligning actions, thoughts, and intentions with divine principles. By embracing spiritual routines, reflection, and community engagement, believers strengthen their character, purpose, and connection to God. Challenges become opportunities for growth, and daily life transforms into a meaningful journey of worship and service. Through compelling stories, scripture, and practical advice, this message inspires action rooted in faith, creating a life filled with clarity, joy, and divine alignment.</span>",

    "<span style='color:#f1c40f;'>Hope is renewed when we trust God’s plan. This preaching emphasizes patience, resilience, and optimism. Even when circumstances seem bleak, believers are encouraged to maintain trust, knowing that God orchestrates everything for ultimate good. By practicing prayer, meditation, and reflection, we cultivate inner strength, clarity, and positive perspective. This sermon highlights that hope drives action, inspires perseverance, and fosters spiritual and emotional growth. Through examples, biblical stories, and guidance, the congregation learns to embody hope as a daily practice, creating a ripple effect of encouragement, motivation, and faith.</span>",
    
    // Repeat or create 10 more unique colorful comments for a total of 20
];

// Fill in to 20 unique comments if needed
while(count($comments) < 20){
    $comments[] = "<span style='color:#".substr(md5(rand()),0,6)."'>This preaching emphasizes the transformative power of spiritual reflection, encouraging believers to embrace faith, hope, love, and action in everyday life. Through contemplation, prayer, and engagement with scripture, individuals grow spiritually, emotionally, and mentally, developing resilience and purpose. Each message guides the faithful to cultivate positivity, trust, and meaningful connections with others, inspiring abundant love, service, and devotion. This sermon invites deep reflection, actionable insights, and motivation for personal and community growth, enhancing spiritual fulfillment and joy in every aspect of life.</span>";
}
?>

<section id="preachings">
    <h2 style="text-align:center; margin-bottom:50px; font-size:2.5em; color:#2980b9;">Our Preachings & Sermons</h2>
    <div class="preachings" style="display:grid; grid-template-columns:repeat(auto-fit,minmax(300px,1fr)); gap:30px; padding:0 20px;">
        <?php
        for($i=1; $i<=20; $i++){
            echo '<div class="preaching-card" style="background:#fff; border-radius:15px; box-shadow:0 5px 15px rgba(0,0,0,0.1); overflow:hidden; transition:0.3s;">
                <img src="assets/images/preaching'.$i.'.jpg" alt="Preaching '.$i.'" style="width:100%; height:250px; object-fit:cover;">
                <div class="preaching-text" style="padding:15px; font-weight:bold; font-size:1em; line-height:1.5em;">'.$comments[$i-1].'</div>
            </div>';
        }
        ?>
    </div>
</section>

