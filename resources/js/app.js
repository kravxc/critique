// app.js - альтернативная версия
import "./bootstrap";
import "@fortawesome/fontawesome-free/css/all.css";
import {
    createIcons,
    Feather,
    House,
    MessageSquare,
    LogIn,
    User,
    Mail,
    Lock,
    Eye,
    EyeOff,
    Album,
    Headphones,
    Compass,
    ShieldCheck,
    PenTool,
    Heart,
} from "lucide";

document.addEventListener("DOMContentLoaded", function () {
    createIcons({
        icons: {
            Feather,
            House,
            MessageSquare,
            LogIn,
            User,
            Mail,
            Lock,
            Eye,
            EyeOff,
            Album,
            Headphones,
            Compass,
            ShieldCheck,
            PenTool,
            Heart,
        },
    });
});
