-- create database
CREATE DATABASE news_management;

-- use database
USE news_management;

-- create users table
CREATE TABLE users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  username VARCHAR(50) NOT NULL,
  password VARCHAR(50) NOT NULL,
  role VARCHAR(20) NOT NULL
);

-- create articles table
CREATE TABLE articles (
  id INT AUTO_INCREMENT PRIMARY KEY,
  title VARCHAR(100) NOT NULL,
  content TEXT NOT NULL,
  author VARCHAR(50),
  publish_date DATE,
  category_id INT
);

-- create subscribers table
CREATE TABLE subscribers (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(50) NOT NULL,
  email VARCHAR(100) NOT NULL UNIQUE
);

-- insert default user
INSERT INTO users (username, password, role) VALUES ('ucscuser', 'ucscuser', 'user');

-- insert default admins
INSERT INTO users (username, password, role) VALUES ('ucsc', 'ucsc', 'admin');
INSERT INTO users (username, password, role) VALUES ('gayashan', 'gayashan', 'admin');
INSERT INTO users (username, password, role) VALUES ('ushitha', 'ushitha', 'admin');
INSERT INTO users (username, password, role) VALUES ('lasal', 'lasal', 'admin');
INSERT INTO users (username, password, role) VALUES ('vinuji', 'vinuji', 'admin');

-- insert subscribers
INSERT INTO subscribers (name, email) VALUES ('Gayashan', 'gayashan@gmail.com');
INSERT INTO subscribers (name, email) VALUES ('Vinuji', 'vinuji@gmail.com');
INSERT INTO subscribers (name, email) VALUES ('Lasal', 'lasal@gmail.com');
INSERT INTO subscribers (name, email) VALUES ('Ushitha', 'ushitha@gmail.com');

-- insert data
INSERT INTO articles (title, content, author, publish_date, category_id) 
VALUES (
    'The Rise of Women in Sports', 
    'Over the past decade, women have become a dominant force in various sports. From football and basketball to tennis and athletics, female athletes are breaking records and challenging stereotypes. This shift is not only empowering women but also inspiring young girls worldwide to pursue sports without limitations. Female athletes are becoming household names, with stars like Serena Williams and Simone Biles changing the way the world perceives women in sports. Moreover, the establishment of dedicated leagues, such as the Women''s National Basketball Association (WNBA), has provided a professional platform for female athletes to thrive. Sponsorships from major companies, alongside the increasing attention of media outlets, have amplified the visibility of women''s sports. As a result, young girls have more role models to look up to, and gender barriers in the sports world are slowly crumbling. The future is looking bright, and continued advocacy for gender equality will pave the way for even greater achievements.', 
    'gayashan', 
    '2024-09-01', 
    1
);

INSERT INTO articles (title, content, author, publish_date, category_id) 
VALUES (
    'Top 10 Football Players of 2024', 
    '2024 has been a phenomenal year for football, with many players standing out for their extraordinary performances. Among the seasoned veterans like Lionel Messi and Cristiano Ronaldo, a new generation of players is emerging, bringing fresh energy and talent to the pitch. Kylian Mbappé continues to impress with his lightning speed and agility, while Erling Haaland''s goal-scoring prowess has made him one of the most feared forwards in the world. This article ranks the top 10 football players of 2024 based on their performances across various leagues and tournaments. These players are not only distinguished by their stats in goals and assists but also by their leadership and ability to turn the tide in crucial matches. Whether it''s Mbappé''s electrifying runs, Kevin De Bruyne''s vision in midfield, or Virgil van Dijk''s defensive mastery, each of these athletes has left an indelible mark on the football world this year. The article also includes insights from coaches and analysts on what makes these players so unique.', 
    'lasal', 
    '2024-09-10', 
    1
);

INSERT INTO articles (title, content, author, publish_date, category_id) 
VALUES (
    'Hollywood''s Blockbuster Movies of the Year', 
    '2024 has been a year of cinematic surprises, with Hollywood delivering some of the most anticipated blockbusters to date. From epic superhero sagas to gripping psychological thrillers, the film industry has once again pushed the boundaries of storytelling and visual effects. "The Avenger''s Rebirth," with its stunning action sequences and emotional depth, captivated audiences worldwide and became the highest-grossing film of the year. On the other hand, "Mind Maze," a dark and twisted psychological thriller, left viewers on the edge of their seats with its unpredictable plot twists. This article reviews the top-grossing movies of the year and analyzes their impact on both audiences and the future of filmmaking. Directors are increasingly blending cutting-edge technology with heartfelt narratives, which has been a winning formula at the box office. Furthermore, the rise of streaming platforms like Netflix and Disney+ has challenged traditional cinema, as more films are being released directly to streaming. However, the allure of the big screen remains strong, as evidenced by the packed theaters for this year’s top releases.', 
    'vinuji', 
    '2024-08-15', 
    2
);

INSERT INTO articles (title, content, author, publish_date, category_id) 
VALUES (
    'The Future of Streaming Platforms', 
    'Streaming platforms have become an integral part of modern entertainment, reshaping how we consume films, TV shows, and documentaries. In 2024, streaming services like Netflix, Amazon Prime Video, and Disney+ have continued their dominance by investing heavily in original content and user-friendly interfaces. However, a shift is happening, as new competitors emerge, offering niche content tailored to specific audiences. Platforms such as Shudder, which focuses on horror films, and Crunchyroll, dedicated to anime, are gaining substantial user bases. This article delves into the evolving landscape of streaming, exploring how platforms are leveraging AI to recommend content based on user preferences, creating interactive experiences, and offering localized content to reach broader audiences. The increased competition is also driving a surge in subscription models, where consumers are looking for value, exclusive content, and the best user experience. The future of streaming lies in not just acquiring new content but in enhancing the overall experience for viewers across the globe.', 
    'ushitha', 
    '2024-09-05', 
    2
);

INSERT INTO articles (title, content, author, publish_date, category_id) 
VALUES (
    'Global Political Trends in 2024', 
    '2024 has been a year of significant political shifts around the world. Governments are grappling with challenges that include economic uncertainty, climate change, and social unrest. In countries like the United States and the United Kingdom, polarized political landscapes have led to major elections that could redefine global relations for years to come. This article provides an in-depth look at the key political trends of 2024, focusing on the rise of populist movements and the growing demand for climate action. Leaders in Europe and North America are faced with the challenge of balancing economic recovery post-pandemic while addressing the pressing need for environmental sustainability. Meanwhile, in Asia, countries like China and India are asserting their influence on the global stage, both economically and politically. The article explores how these political dynamics could shape global policy in the coming years, affecting trade, diplomacy, and security.', 
    'gayashan', 
    '2024-09-12', 
    3
);

INSERT INTO articles (title, content, author, publish_date, category_id) 
VALUES (
    'Election Results and What They Mean for the Economy', 
    'Recent elections around the world have led to significant changes in leadership, and the new administrations are now laying out their economic policies. The United States has seen a dramatic shift in its economic direction with the election of a new president, who has promised to prioritize green energy and reduce the nation''s reliance on fossil fuels. Similarly, in Europe, several nations have elected leaders focused on progressive tax reforms and social welfare programs. This article examines the implications of these election results on the global economy, with a particular focus on international trade, inflation control, and fiscal policies. We also consider how these changes are being received by investors, with stock markets reacting swiftly to the election outcomes. In developing nations, new governments are focusing on poverty reduction, job creation, and improving infrastructure, which could have long-term positive effects on the global economy.', 
    'vinuji', 
    '2024-08-30', 
    3
);

INSERT INTO articles (title, content, author, publish_date, category_id) 
VALUES (
    'Top 5 Business Trends for 2025', 
    'As the business world prepares for 2025, several trends are poised to reshape industries across the globe. First and foremost is the increasing adoption of artificial intelligence and automation, which is revolutionizing everything from customer service to manufacturing. Companies are also making sustainability a priority, with more businesses committing to reducing their carbon footprints and incorporating eco-friendly practices into their operations. Remote work continues to influence organizational culture, with companies adopting hybrid work models that offer flexibility to employees. Digital currencies are another hot topic, as cryptocurrencies gain acceptance as a legitimate form of payment in major markets. This article explores these trends in detail and offers insights into how companies can adapt to remain competitive. Additionally, we look at the impact of these trends on the global economy and job market, predicting which sectors are likely to see the most growth.', 
    'lasal', 
    '2024-09-02', 
    4
);

INSERT INTO articles (title, content, author, publish_date, category_id) 
VALUES (
    'How to Build a Strong Business Network', 
    'In today’s competitive business environment, networking is more important than ever. Building a strong network can open doors to new opportunities, whether you are an entrepreneur, corporate professional, or freelancer. Networking allows you to meet influential people in your industry, exchange ideas, and build mutually beneficial relationships. This article provides practical tips on how to build and nurture a strong business network, from attending industry events to leveraging social media platforms like LinkedIn. It also discusses how to provide value in your interactions, maintain long-term connections, and use networking to advance your career or business. Ultimately, a strong network can help you stay informed about industry trends, find new clients, and create opportunities for professional growth.', 
    'ushitha', 
    '2024-09-14', 
    4
);

INSERT INTO articles (title, content, author, publish_date, category_id) 
VALUES (
    'The Benefits of a Plant-Based Diet', 
    'The plant-based diet has gained tremendous popularity in recent years, and for good reason. Not only does it offer numerous health benefits, but it also aligns with environmental sustainability and ethical considerations. Plant-based diets are rich in essential nutrients, fiber, and antioxidants, which help to lower the risk of chronic diseases like heart disease, diabetes, and certain cancers. This article explores the science behind plant-based eating, offering tips on how to transition to a plant-based diet and ensure you are getting all the necessary nutrients. From protein-rich plants like lentils and quinoa to incorporating a variety of fruits and vegetables into your meals, the article provides practical advice on meal planning and making the switch to a healthier, more sustainable way of eating.', 
    'gayashan', 
    '2024-09-18', 
    5
);

INSERT INTO articles (title, content, author, publish_date, category_id) 
VALUES (
    'Mental Health Awareness: Why It Matters', 
    'Mental health has become one of the most important topics of discussion in the modern world, as people face increasing levels of stress, anxiety, and depression. The COVID-19 pandemic, economic pressures, and social media have all contributed to a mental health crisis affecting millions of people globally. This article sheds light on the importance of mental health awareness and provides practical strategies for improving mental well-being. From recognizing the early signs of mental health issues to finding resources for support, the article offers insights on how individuals can take proactive steps to prioritize their mental health. It also highlights the role of community, therapy, and self-care practices like mindfulness and exercise in maintaining a healthy mind.', 
    'vinuji', 
    '2024-09-20', 
    5
);
