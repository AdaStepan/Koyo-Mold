# Koyo-Mold (last year version/permitted copy version)
Manufacturer of oil seals, o-rings, packing seals, braided packing, gasket hoses, mechanical shaft seals, hydraulic pumps, hydraulic and pneumatic cylinders, engineering plastics, adhesive and sealants, couplings, circlip and rubber products. 

"This website is not public, it is LAN based "inventory" website for warehouse and manufacturing purposes. 

Developer's notes:

1. The server is coded by using SQL while using phpMyAdmin as DB Administration tool.
2. It is LAN based therefore under use of APACHE Server using XAMPP or WAMPP as Apache distribution tool.
3. SQL codes are deprecated by now therefore might encounter few problems in insert, delete, edit datas. However, it is tested together with "Admin Panel" which I find functional albeit with few problems due to unsupported MySql.
4. Item Table Information can be printed/converted in PDF, Excel or plain text.
5. Moderate use of Jquery and Javascript due to extra features like time, pop-ups, and data tables.
6. Some features are missing like Help or Tech Support features due to time-constraints
7. Due to time-constraints and being the only guy who runs QA, development, design, and security testing. I didn't bother to add modern looking slick front end designs (although planning to).
8. Passwords are encrypted in SHA-1. The early version have SHA-1 with SALT encryption.
9. Layout placements have few defects like "Zoom-in/Zoom-out" and screen resolution problems. I said again last year, time constraints and lack of manpower. Didn't go far to do browser compatibility checks.
10. Google Chrome and Firefox are the best way to use this. If trying to use this on mobile, IE, Opera, or Netscape just don't do it since the browser compatbility is still incomplete.
11. The codes are customizable and can be easily learned(Honestly the code placements is not good looking)
12. Users have unique id to avoid duplication.
13. Validation is near perfect.
14. User/Encoder page (login.php) and Admin/Encoder page (koyomoldadmin.php), also has separate tables for ordinary users and admin users.
15. User indication on both accounts ex. "Logout Rency".
16. Loading Screen
17. Cookies are non-permanent therefore users cannot save their login credentials on browsers after logging out, closing browser or pulling out the plug thus decently secured.
18. Notes on tables for description.
19. Simplistic Design

Cancelled/Delayed features:
1. SALT encryption add-on (cryptology and security are not that priority due to it being LAN not WWW based)
2. Tech Support and Help features like skype calls and interactive help chat which is modelled on modified VOIP framework (time constraint and risky).
3. Problem table with status indication (admin users)
4. Bootstrap design or DIY design
5. FoxPro server connection
6. Loading Screen user indication
7. 10 minutes logout on User/Encoders when idle (based on warehouses setups and questionable employees)
8. Combining public e-commerce website features (whiteboard brainstorm) that is based on Sales Inventory which will be fetched LAN based server.
9. Making this mobile friendly
10. Browser compatibility changes
11. Remote Access through admin assigned company smartphone or computers from different branches especially the main branc (Simplex Industrial Corporation).
