<!DOCTYPE html>
<html>
    <head>
        <title>QuestTracker</title>
        <style>
            /* Reset box sizing & body styles */
            * {
              box-sizing: border-box;
              margin: 0;
              padding: 0;
            }

            body {
              font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
              background-color: #f4f6f9;
              color: #333;
              display: flex;
              justify-content: center;
              padding: 40px 20px;
            }

            /* Main Container */
            main {
              background-color: #ffffff;
              width: 100%;
              max-width: 600px;
              padding: 30px;
              border-radius: 8px;
              box-shadow: 0 4px 12px rgba(0, 0, 0, 0.08);
            }

            /* Form Layout */
            form {
              display: flex;
              flex-direction: column;
              gap: 12px;
              padding-bottom: 24px;
              margin-bottom: 24px;
              border-bottom: 2px solid #eef2f5;
            }

            label {
              font-size: 0.875rem;
              font-weight: 600;
              color: #4a5568;
            }

            input[type='text'],
            select {
              width: 100%;
              padding: 10px 12px;
              border: 1px solid #cbd5e1;
              border-radius: 6px;
              font-size: 0.95rem;
              color: #1e293b;
              background-color: #fff;
              transition: border-color 0.2s ease, box-shadow 0.2s ease;
            }

            input[type='text']:focus,
            select:focus {
              outline: none;
              border-color: #3b82f6;
              box-shadow: 0 0 0 3px rgba(59, 130, 246, 0.2);
            }

            button[type='submit'] {
              margin-top: 8px;
              padding: 12px;
              background-color: #2563eb;
              color: #ffffff;
              font-size: 0.95rem;
              font-weight: 600;
              border: none;
              border-radius: 6px;
              cursor: pointer;
              transition: background-color 0.2s ease;
            }

            button[type='submit']:hover {
              background-color: #1d4ed8;
            }

            /* Remove default <br> visual gaps in favor of layout spacing */
            main > br,
            form > br {
              display: none;
            }

            /* Displayed Quest Output Items */
            main p {
              font-size: 0.95rem;
              font-weight: 600;
              color: #1e293b;
              margin-top: 16px;
            }

            main p:first-of-type {
              margin-top: 0;
            }

            /* Quest Links */
            main a {
              display: inline-block;
              font-size: 0.85rem;
              text-decoration: none;
              margin-right: 12px;
              margin-top: 6px;
              padding: 4px 8px;
              border-radius: 4px;
              transition: background-color 0.2s ease;
            }

            /* Delete Link */
            main a[href^='delete.php'] {
              color: #dc2626;
              background-color: #fef2f2;
            }

            main a[href^='delete.php']:hover {
              background-color: #fee2e2;
            }

            /* Toggle Link */
            main a[href^='toggle.php'] {
              color: #0284c7;
              background-color: #f0f9ff;
            }

            main a[href^='toggle.php']:hover {
              background-color: #e0f2fe;
            }
        </style>
    </head>
    <body>
        <header>
            <h1>Quest Tracker</h1>
        </header>