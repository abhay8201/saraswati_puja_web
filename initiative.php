<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Saraswati Puja 2024 at CIMAGE</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            background-color: #f9f9f9;
            color: #333;
        }

        header {
            background: goldenrod;
            color: #fff;
            padding: 1rem 0;
            text-align: center;
        }

        main {
            padding: 1rem;
        }

        .section {
            margin: 2rem 0;
            padding: 1rem;
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        .section h2 {
            margin-bottom: 1rem;
            color: goldenrod;
        }

        .form-section {
            margin: 2rem 0;
            padding: 2rem;
            background: #f3f3f3;
            border-radius: 10px;
        }

        .form-section form {
            display: flex;
            flex-direction: column;
        }

        .form-group {
            margin-bottom: 1rem;
        }

        .form-group label {
            display: block;
            margin-bottom: 0.5rem;
        }

        .form-group input,
        .form-group select,
        .form-group textarea {
            width: 100%;
            padding: 0.5rem;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        button {
            padding: 0.7rem;
            background: goldenrod;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        button:hover {
            background: #d4a017;
        }

        footer {
            text-align: center;
            padding: 1rem 0;
            background: darkgoldenrod;
            color: #fff;
        }

        @media (max-width: 768px) {
            .form-section form {
                flex-direction: column;
            }
        }
    </style>
</head>
<body>
    <header>
        <h1>Saraswati Puja 2024 at CIMAGE College</h1>
        <p>A Fusion of Tradition and Management Excellence</p>
    </header>

    <main>
        <section class="section">
            <h2>Devotion and Worship</h2>
            <p>The Saraswati Puja 2024 celebration at CIMAGE begins with the invocation of the goddess Saraswati through prayers and rituals. All three branches of CIMAGE (Boring Road Branch, Vivekananda Marg Branch, and Patliputra Branch) come alive with colorful decorations, adorned with flowers and rangolis, creating an atmosphere of reverence and joy. Students, dressed in traditional attire, gathered at their respective branches for the worship of Maa Saraswati, taking blessings for knowledge and success in their academic pursuits.</p>
            <p>Students and faculty members participated with great devotion, accompanied by Vedic hymns and bhajans that filled the air with spirituality. Offerings of flowers, fruits, and sweets symbolized reverence and gratitude, fostering a sense of unity and harmony among everyone present.</p>
        </section>

        <section class="section">
            <h2>Student’s Project Exhibition</h2>
            <p>On this auspicious occasion, students presented innovative projects such as Mithila paintings, Chandrayan, Mahatma Buddha models, lightning robots, and more. These exhibits showcased academic excellence and practical skills. Guests, including CIMAGE Director Prof. Neeraj Agrawal, evaluated the projects and encouraged the budding innovators with valuable feedback.</p>
        </section>

        <section class="section">
            <h2>Celebration Highlights</h2>
            <p>Saraswati Puja at CIMAGE College is a unique blend of devotion, creativity, and management skills. Students participate in prayers, cultural programs, exhibitions, and social work, showcasing their talents and values.</p>
        </section>

        <section class="section">
            <h2>Social Initiative</h2>
            <p>Students are encouraged to allocate half of the funds they collect during Saraswati Puja for social causes, such as helping underprivileged communities. This fosters a sense of responsibility and compassion among students.</p>
        </section>

        <section class="form-section">
            <h2>Join the Initiative</h2>
            <form action="submit_form.php" method="POST">
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" id="email" name="email" placeholder="example@cimage.in" required pattern="[a-zA-Z0-9._%+-]+@cimage\.in$">
                </div>

                <div class="form-group">
                    <label for="student-id">Student ID</label>
                    <input type="text" id="student-id" name="student_id" placeholder="12345" required pattern="\d{5,6}">
                </div>

                <div class="form-group">
                    <label for="contribution">Contribution Type</label>
                    <select id="contribution" name="contribution" required>
                        <option value="">Select an option</option>
                        <option value="donation">Donate items (Books, Copies, etc.)</option>
                        <option value="ideas">Share an idea for using funds</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="idea">If sharing an idea, please describe</label>
                    <textarea id="idea" name="idea" placeholder="Describe your idea here..." rows="5"></textarea>
                </div>

                <button type="submit">Submit</button>
            </form>
        </section>
    </main>

    <footer>
        <p>&copy; 2024 CIMAGE College. All Rights Reserved.</p>
    </footer>
</body>
</html>
