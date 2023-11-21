<style>
        body {
            font-family: Arial, sans-serif;
        }

        .form-container {
            max-width: 1100px;
            margin: 0 auto;
            margin-top: 100px;
            margin-bottom: 100px;
        }

        .input-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"], input[type="email"], select, textarea {
            width: 100%;
            padding: 10px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            font-size: 16px;
            resize: none;
        }

        textarea {
            height: 92px;
        }

        .half-width {
            float: left;
            width: 48%;
            margin-right: 4%;
        }

        .half-width:last-child {
            margin-right: 0;
        }

        .clearfix::after {
            content: "";
            clear: both;
            display: table;
        }

        .send-btn {
            padding: 10px 15px;
            background-color: #007BFF;
            color: white;
            border: none;
            cursor: pointer;
            font-size: 16px;
        }

        .send-btn:hover {
            background-color: #0056b3;
        }

        .red-asterisk {
        color: red;
        }

        body {
    font-family: Arial, sans-serif;
}

.radio-container {
    display: flex;
    gap: 20px;
    align-items: center;
}

.radio-label {
    display: flex;
    align-items: center;
    cursor: pointer;
    user-select: none;
}

.radio-label input[type="radio"] {
    display: none;
}

.radio-label .custom-radio {
    display: inline-block;
    width: 20px;
    height: 20px;
    border: 2px solid #000;
    border-radius: 50%;
    margin-right: 5px;
    position: relative;
}

.radio-label input[type="radio"]:checked + .custom-radio::before {
    content: "";
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    width: 12px;
    height: 12px;
    background-color: #000;
    border-radius: 50%;
}

    </style>