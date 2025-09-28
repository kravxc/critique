import "./bootstrap";
import "@fortawesome/fontawesome-free/css/all.css";
import {
    createIcons,
    Feather,
    House,
    MessageSquare,
    LogIn,
    LogOut,
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
    UserPlus,
} from "lucide";

document.addEventListener("DOMContentLoaded", function () {
    createIcons({
        icons: {
            Feather,
            House,
            MessageSquare,
            LogIn,
            LogOut,
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
            UserPlus,
        },
    });
});
